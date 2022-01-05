const initialState = { 
    request_role_settings : {
        method : 'GET',
        callback : 1,
        payload : 'get_roles',
        js_route : {
            models : 'Roles.php',
            controller: 'getRoles_Controller.php'
        }
    },
    post_request_dev : {
        method : "POST",
        callback : 1,
        payload : {
            key : 'post_dev',
            data : {
                firstname : null, lastname : null,
                role : null, userstat: null, reason : null, address : null,
                isagree : false, skillset: null, profileLink : null
            }
        },
        js_routes : {
            models: 'DevRegistration.php',
            controller: 'devRegister_Controller.php'
        }
    }
}

export default {
    initialState
}