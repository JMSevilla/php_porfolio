import state from "./global"

class validation {
    validate_post(object) {
        if(!object.firstname || !object.lastname
            || !object.role || !object.userstat || !object.profileLink
            || !object.reason || !object.address || !object.skills || object.agreement != true){
                return new Promise((resolve) => {
                    resolve("empty handed");
                })
            }
    }
}

export default new validation();