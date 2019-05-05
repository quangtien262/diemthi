$.typeahead({
    input: '.js-typeahead-user_v1',
    minLength: 1,
    order: "asc",
    dynamic: true,
    delay: 500,
    backdrop: {
        "background-color": "#fff"
    },
    template: function (query, item) {

        var color = "#777";
        if (item.status === "owner") {
            color = "#ff1493";
        }

        return '<span class="row">\n\
                <a href="{{url}}" style="color: #0878a3; font-size: 1.3em;"><span class="avatar">' +
                    '<img style="width: 38px;margin-right: 10px" src="{{image}}">' +
                "</span></a>" +
                '<a href="{{url}}" style="color: #0878a3; font-size: 1.3em;">' +
                    '<span class="username">{{username}}' +
                "</a></span>"
    },
    emptyTemplate: "Không tìm thấy kết quả nào cho từ khóa <b style='color: #0878a3; font-size: 1.3em;'>{{query}}</b>",
    source: {
        user: {
            display: "username",
            href: "",
            data: [{
                    "id": 415849,
                    "username": "",
//                    "url": "",
                    "image": ""
                }],
            ajax: function (query) {
                return {
                    type: "GET",
                    url: "/admin/search-autocomplate",
                    path: "data.user",
                    data: {
                        q: "{{query}}"
                    },
                    callback: {
                        done: function (data) {
//                            for (var i = 0; i < data.data.user.length; i++) {
//                                if (data.data.user[i].username === 'running-coder') {
//                                    data.data.user[i].status = 'owner';
//                                } else {
//                                    data.data.user[i].status = 'contributor';
//                                }
//                            }
                            return data;
                        }
                    }
                }
            }

        },
        project: {
            display: "project",
            href: function (item) {
                return '/' + item.project.replace(/\s+/g, '').toLowerCase() + '/documentation/'
            },
            ajax: [{
                    type: "GET",
                    url: "/search-autocomplate",
                    data: {
                        q: "{{query}}"
                    }
                }, "data.project"],
            template: '<span>' +
                    '<span class="project-logo">' +
                    '<img src="{{image}}">' +
                    '</span>' +
                    '<span class="project-information">' +
                    '<span class="project">{{project}} <small>{{version}}</small></span>' +
                    '<ul>' +
                    '<li>{{demo}} Demos</li>' +
                    '<li>{{option}}+ Options</li>' +
                    '<li>{{callback}}+ Callbacks</li>' +
                    '</ul>' +
                    '</span>' +
                    '</span>'
        }
    },
    callback: {
        onClick: function (node, a, item, event) {

            // You can do a simple window.location of the item.href
//            alert(JSON.stringify(item));

        },
        onSendRequest: function (node, query) {
            console.log('request is sent')
        },
        onReceiveRequest: function (node, query) {
            console.log('request is received')
        }
    },
    debug: true
});