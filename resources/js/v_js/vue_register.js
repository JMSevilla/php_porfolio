ELEMENT.locale(ELEMENT.lang.en)
import {get_roles, dev_req_data} from "../http.js"
import dev_validation from "../validate"
new Vue({
    el : '#v_reg',
    data: function() {
        return {
        testdatarest: 'hello',
            options: [],
            devStatus: [],
            skillSet: [],
            task : {
                role: '',
                userstat : '', firstname : '', lastname : '', profileLink : '', reason : '', address : '', skills : '', agreement: false
            },
            rules: { 
                firstname : [
                    { required : true, message : 'Please input firstname', trigger: 'blur'}
                ],
                lastname : [
                    {required : true, message : 'Please input lastname', trigger: 'blur'}
                ],
                role: [
                    { required: true, message : 'please select roles', trigger: 'change'}
                ],
                userstat: [
                    { required: true, message : 'please select status', trigger: 'change'}
                ],
                profileLink: [
                    {required : true, message : 'Please provide profile link', trigger: 'blur'}
                ],
                reason: [
                    {required : true, message : 'Please give us some briefing', trigger: 'blur'}
                ],
                address: [
                    {required : true, message : 'Please provide your address', trigger: 'blur'}
                ],
                skills: [
                    { required: true, message : 'please select skill level', trigger: 'change'}
                ],
                agreement: [
                    {required : true, message : 'Please agree with our terms', trigger: 'blur'}
                ]
            }
        }
    },
    methods: {
        migrateUserStatus : function() {
            this.devStatus.push({
                label : 'Working',
                value: 'working'
            }, { 
                label : 'Student', value: 'student'
            }, { 
                label : 'Freelancer', value : 'freelancer'
            })
        },
        migrateUserSkillSet : function() {
            this.skillSet.push({
                label : 'Beginner',
                value: 'beginner'
            }, { 
                label : 'Intermediate', value: 'intermediate'
            }, { label : 'Software Engineering Level', value: 'software engineering level'})
        },
        onsubmitdev: function(frmName) {
            this.$refs[frmName].validate((valid) => {
                if(valid) {
                    dev_req_data(this.task).then((r) => {
                        console.log(r);
                    })
                }
            })
        },
    },
    created() {
        this.migrateUserStatus();
        this.migrateUserSkillSet();
        get_roles().then((res) => {
           const getroles = JSON.parse(res);
           this.options = getroles;
        })
    }
})