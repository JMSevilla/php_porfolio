import state from "./global.js";

export function get_roles() { 
    try {
        return new Promise((resolve) => {
            $.post("app/Helpers/GET_HELPERS/get_roles_helpers.php", state.initialState.request_role_settings, function(response) {
                resolve(response);
            })
        })
    } catch (error) {
        alert(error)
    }
}

export const dev_req_data = (object) => {
    try {
        
        state.initialState.post_request_dev.payload.data.firstname = object.firstname;
        state.initialState.post_request_dev.payload.data.lastname = object.lastname;
        state.initialState.post_request_dev.payload.data.reason = object.reason;
        state.initialState.post_request_dev.payload.data.role = object.role;
        state.initialState.post_request_dev.payload.data.address = object.address;
        state.initialState.post_request_dev.payload.data.userstat = object.userstat;
        state.initialState.post_request_dev.payload.data.skillset = object.skills;
        state.initialState.post_request_dev.payload.data.profileLink = object.profileLink;
        if(object.agreement === true) {
            state.initialState.post_request_dev.payload.data.isagree = 1;
        }
        return new HTTP().dev_reg_req(state.initialState.post_request_dev);
    } catch (error) {
        alert(error)
    }
}

class HTTP {
    dev_reg_req = (payload) => {
        const request = new Promise((resolve) => {
            $.post(`app/Helpers/POST_HELPERS/post_devreg_.php`, payload, (response) => {
                resolve(response);
            })
        })
        return request;
    }
}