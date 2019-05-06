<?php

namespace App\Services\Utils;

use Validator;
use Illuminate\Validation\Rule;

class ClassValidationRequest {

    public function formExpectedVacancy($request) {
        //create rules name
        if (intval($request->vacancyID) == 0) {
            return 'Bạn chưa chọn ứng viên để tiến cử';
        }
        if (intval($request->jobID) == 0) {
            return 'Bạn chưa chọn job để tiến cử';
        }

        $countJob = app('ClassVacancyJob')->countByVacancyIdAndJobId($request->vacancyID, $request->jobID);
        if ($countJob > 0) {
            return 'Ứng viên này đang được gán tiến cử';
        }

        return \ReturnCode::RETURN_SUCCESS;
    }

    public function formEditVacancy($request, $vid) {
        $strError = '';

        if ($vid > 0) {
            $countVacancyCv = app('ClassTbl')->getRowByColumnName(\TblName::VACANCY_CV, 'vacancyID', $vid);

            if (count($countVacancyCv) == 0 && !is_array($request->cvFile)) {
                $strError .= '<li>Bạn chưa up file cv ứng viên lên</li>';
            }
        } else {
            if (!is_array($request->cvFile)) {
                $strError .= '<li>Bạn chưa up file cv ứng viên lên</li>';
            }
        }

        if ($request->candidate == '') {
            $strError .= '<li>Bạn chưa nhập họ tên ứng viên</li>';
        }

        if (isset($request->levelID) && intval($request->levelID) == 0) {
            $strError .= '<li>Bạn chưa nhập level của ứng viên</li>';
        }

        if (isset($request->englishID) && intval($request->englishID) == 0) {
            $strError .= '<li>Bạn chưa chọn level tiếng anh"</li>';
        }

        if ($strError != '') {
            $strError = '<ul>' . $strError . '</ul>';
            return $strError;
        }
        return \ReturnCode::RETURN_SUCCESS;
    }

    public function formEditUser($request, $id) {
        
        if ($request->fullName == '') {
            return '["error","Họ tên không được bỏ trống.' . $request->fullName . '"]';
        }

        //validate username
        if (isset($request->username) && $request->username == '') {
            return '["error","Tên đăng nhập không được bỏ trống.' . $request->username . '"]';
        }
//        $countUser = User::where('username', '=', $request->username)->count();
        $countUser = app('ClassTbl')->getCountRowByColumnName(\TblName::USERS, 'username', $request->username);
        if (intval($id) == 0) {
            if ($countUser > 0) {
                return '["error","Tên đăng nhập này đã tồn tại"]';
            }
            if ($request->password == '') {
                return '["error","Bạn chưa nhập mật khẩu"]';
            }
        }
        if ($countUser >= 2) {
            return '["error","Tên đăng nhập này đã tồn tại"]';
        }

        if ($request->password != $request->passwordConfirm) {
            return '["error","Mật khẩu và mật khẩu xác nhận không giống nhau"]';
        }
        if ($request->fullName == '') {
            return '["error","Bạn chưa nhập họ tên"]';
        }

        if ($request->groupID == 0) {
            return '["error","Bạn chưa chọn nhóm quyền cho nhân viên"]';
        }
        return \ReturnCode::RETURN_SUCCESS;
    }

    public function expectedForm($request) {
        //create rules name
        $dataValidate = [
            'levelID' => $request->levelID,
            'expectedSalary' => $request->expectedSalary,
            'expectedDate' => $request->expectedDate,
            'industry' => $request->industry
        ];

        //create rule validation
        $rules = [
            'levelID' => 'required',
            'expectedSalary' => 'required',
            'expectedDate' => 'required'
        ];

        //config message when return
        $meg = [
            'levelID.required' => sprintf(\AppConst::MSG_ERR_NOT_SELECTED, "Cấp bậc"),
            'expectedSalary.required' => sprintf(\AppConst::MSG_ERR_EMPTY_FIELD, "Mức lương mong muốn"),
            'expectedDate.required' => sprintf(\AppConst::MSG_ERR_EMPTY_FIELD, "Thời gian mong muốn")
        ];

        //check validation industry
        if (empty($request->industryIDs)) {
            $rules['industryIDs'] = 'required';
            $meg['industryIDs.required'] = sprintf(\AppConst::MSG_ERR_NOT_SELECTED, "Lĩnh vực làm việc");
        }

        //check validation city
        if (empty($request->cityIDs)) {
            $rules['cityIDs'] = 'required';
            $meg['cityIDs.required'] = sprintf(\AppConst::MSG_ERR_NOT_SELECTED, "Khu vực ứng tuyển");
        }

        //get validation result
        $validation = Validator::make($dataValidate, $rules, $meg);

        if ($validation->fails()) {
            return $validation->errors()->messages();
        }

        return \ReturnCode::RETURN_SUCCESS;
    }

}
