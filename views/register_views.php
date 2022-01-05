<div>
    <div id="v_reg">
        <div class="container" style="margin-top: 50px; margin-bottom : 50px; padding: 15px;">
            <el-card shadow="always">
                <h3>Developer Registration</h3>
                <span>Welcome ! please fill up all the fields for us to know you. </span>
                <el-form ref="task" :model="task" :rules="rules">
                <div style="margin-top: 10px; margin-bottom: 10px;" class="row">
                    <div class="col-sm">
                       <el-form-item label="Firstname" prop="firstname">
                            <el-input
                            type="text"
                            placeholder="Enter firstname"
                            v-model="task.firstname"
                            style="margin-bottom: 10px; margin-top: 10px;"
                            ></el-input>
                       </el-form-item>
                    </div>
                    <div class="col-sm">
                        <el-form-item label="Lastname" prop="lastname">
                            <el-input
                                    type="text"
                                    placeholder="Enter lastname"
                                    v-model="task.lastname"
                                    style="margin-bottom: 10px; margin-top: 10px;"
                            ></el-input>
                        </el-form-item>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <el-form-item label="Choose role to play" prop="role">
                            <el-select clearable style="margin-bottom: 10px; margin-top: 10px; width: 100%;" v-model="task.role" filterable placeholder="Select">
                                <el-option
                                        v-for="item in options"
                                        :key="item.roleName"
                                        :label="item.roleName"
                                        :value="item.roleName">
                                </el-option>
                            </el-select>
                        </el-form-item>
                    </div>
                    <div class="col-sm">
                        <el-form-item label="Status" prop="userstat">
                        <el-select clearable style="margin-bottom: 10px; margin-top: 10px; width: 100%;" v-model="task.userstat" filterable placeholder="Select">
                            <el-option
                                    v-for="item in devStatus"
                                    :key="item.value"
                                    :label="item.label"
                                    :value="item.value">
                            </el-option>
                        </el-select>
                        </el-form-item>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                       <el-form-item label="Profile Link (e.g Facebook Link)" prop="profileLink">
                       <el-input
                            type="text"
                            placeholder="Enter profile link"
                            v-model="task.profileLink"
                            style="margin-bottom: 10px; margin-top: 10px;"
                            ></el-input>
                       </el-form-item>
                    </div>
                    <div class="col-sm">
                       <el-form-item label="Reason of joining" prop="reason">
                       <el-input
                                type="textarea"
                                :rows="2"
                                style="margin-bottom: 10px; margin-top: 10px;"
                                placeholder="Please give a quick briefing why do you want to join."
                                v-model="task.reason">
                                </el-input>
                       </el-form-item>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                    <el-form-item label="Address" prop="address">
                    <el-input
                                type="textarea"
                                :rows="2"
                                style="margin-bottom: 10px; margin-top: 10px;"
                                placeholder="Enter your address."
                                v-model="task.address">
                                </el-input>
                    </el-form-item>       
                    </div>
                    <div class="col-sm">
                       <el-form-item label="Your skill level" prop="skills">
                       <el-select clearable style="margin-bottom: 10px; margin-top: 10px; width: 100%;" v-model="task.skills" filterable placeholder="Select">
                            <el-option
                                    v-for="item in skillSet"
                                    :key="item.value"
                                    :label="item.label"
                                    :value="item.value">
                            </el-option>
                        </el-select>
                       </el-form-item>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                    <span>Agree with our terms and conditions</span><br>
                    <el-form-item label="Agree with our terms and conditions" prop="agreement">
                    <el-checkbox v-model="task.agreement">Agree</el-checkbox>
                    </el-form-item>
                    </div>
                    <div class="col-sm">
                       
                    </div>
                </div>
                <el-button
                type="primary"
                plain
                style="float: right; margin-bottom: 10px; margin-top: 10px;"
                @click="onsubmitdev('task')"
                >Submit</el-button>
                </el-form>
            </el-card>
        </div>
    </div>
</div>