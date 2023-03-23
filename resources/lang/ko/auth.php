<?php

return [
    'accept_term'     => '약관을 확인하였으며, 이에 동의합니다.',
    'active'          => [
        'attribute' => '활성화',
        'error'     => [
            'activated' => '계정이 이미 활성화 되어있습니다. 다시 활성화할 필요가 없습니다.',
            'disable'   => '이 사이트는 계정 활성화 시스템을 사용하지 않습니다. 사이트로 가서 로그인 해주세요!',
            'throttle'  => '회원님의 비정상적인 행동이 감지되었습니다. 조작에 주의부탁드립니다! 문제가 있을 경우 이메일로 연락주세요.',
        ],
        'promotion' => '계정이 아직 활성화되지 않은 경우 먼저 [:action]하세요!',
        'sent'      => '활성화코드가 이미 회원님의 이메일로 전송되었습니다. 잠시 후에 메일 확인이 안 될 경우, 휴지통이나 스팸차단을 확인해주세요.',
    ],
    'aup'             => '수용가능한 이용약관',
    'captcha'         => [
        'attribute' => '인증번호',
        'error'     => [
            'failed'  => '인증번호 확인 실패, 다시 입력해주세요.',
            'timeout' => '인증번호가 올바르지 않습니다! 제한시간이 지났거나 새로고침하여 다시 시도해주세요.',
        ],
        'required'  => '인증번호를 정확하게 입력해주세요.',
        'sent'      => '인증번호가 메일로 전송되었습니다. 잠시 후에 도착하지 않을 경우 휴지통이나 스팸차단을 확인해주세요',
    ],
    'email'           => [
        'error' => [
            'banned'  => '사이트에서 고객님이 사용하시는 이메일을 차단하였습니다. 다른 유효한 이메일을 사용해주세요.',
            'invalid' => '지원하지 않는 이메일 형식입니다.',
        ],
    ],
    'error'           => [
        'account_baned'  => '회원님의 계정은 차단되었습니다!',
        'login_error'    => '로그인 오류, 잠시 후 다시 시도해주세요!',
        'login_failed'   => '로그인 실패, 이메일계정과 비밀번호를 정확하게 입력해주세요!',
        'not_found_user' => '해당 계정을 찾을 수 없습니다. 다른 방식으로 로그인해주세요.',
        'repeat_request' => '새로 고침 후 다시 시도해 주시기 바랍니다.',
        'url_timeout'    => '연결 실패, 다시 시도해주세요.',
    ],
    'failed'          => '제출된 인증 정보가 레코드와 일치하지 않습니다.',
    'invite'          => [
        'attribute'    => '초대 코드',
        'error'        => [
            'unavailable' => '초대코드 사용불가. 다시 시도해주세요.',
        ],
        'get'          => '초대 코드를 받기',
        'not_required' => '초대 코드없이 회원가입을 진행해주세요!',
    ],
    'login'           => '로그인',
    'logout'          => '로그아웃',
    'maintenance'     => '보호',
    'maintenance_tip' => '사이트 점검 중',
    'oauth'           => [
        'bind_failed'     => '연동 실패',
        'bind_success'    => '연동 성공',
        'login_failed'    => '중복 접속 실패!',
        'rebind_success'  => '재연동 성공',
        'register'        => '회원가입 바로가기',
        'register_failed' => '회원가입 실패',
        'registered'      => '이미 가입되셨습니다, 로그인 해주세요.',
        'unbind_failed'   => '연동 해제 실패',
        'unbind_success'  => '연동 해제 성공',
    ],
    'optional'        => '옵션',
    'password'        => [
        'forget'   => '비밀번호를 잊으셨나요?',
        'new'      => '새로운 비밀번호를 입력하세요',
        'original' => '이전 비밀번호',
        'reset'    => [
            'attribute' => '비밀번호 재설정',
            'error'     => [
                'disabled' => '현재 비밀번호 재설정이 불가합니다. 다음 이메일로 연락 주세요: email',
                'failed'   => '비밀번호 재설정 실패',
                'throttle' => '24시간 이내 비밀번호 재설정 : time 회만 가능, 잦은 시도를 하지 마십시오.',
                'same'     => '새 비밀번호는 기존 비밀번호와 같을 수 없습니다, 다시 입력해주세요.',
                'wrong'    => '이진 비밀번호 오류, 다시 입력해주세요.',
                'demo'     => '관리자 페이지 비밀번호 변경 금지',
            ],
            'sent'      => '재설정 성공, 모든 이메일을 확인해주세요. (없을 경우 스팸메일 확인)',
            'success'   => '새 비밀번호 설정 성공,  로그인 페이지로 가십시오.',
        ],
    ],
    'register'        => [
        'attribute' => '회원가입',
        'code'      => '회원가입 인증번호',
        'error'     => [
            'disable'  => '죄송합니다. 현재 회원가입이 불가합니다.',
            'throttle' => '防刷机制已激活，请勿频繁注册',
        ],
        'failed'    => '회원가입 실패, 잠시 후 다시 시도해주세요.',
        'promotion' => '아직 계정이 없으신가요?',
        'success'   => '회원가입 성공',
    ],
    'remember_me'     => '로그인 상태 유지',
    'request'         => '획득',
    'throttle'        => '너무 많은 로그인을 시도하였습니다. :seconds 초 후에 다시 시도하십시오.',
    'tos'             => '이용 약관',
];
