<!--<div class="record-details column col-xs-12 col-sm-7">-->
<!--    <div class="pull-left">-->
<!--        <div class="add-edit-delete-group btn-group" style="display: none;">-->
<!--            <button id="add-provider" class="btn btn-primary">-->
<!--                <span class="glyphicon glyphicon-plus"></span>-->
<!--                Add                        </button>-->
<!--            <button id="edit-provider" class="btn btn-default" disabled="">-->
<!--                <span class="glyphicon glyphicon-pencil"></span>-->
<!--                Edit                        </button>-->
<!--            <button id="delete-provider" class="btn btn-default" disabled="">-->
<!--                <span class="glyphicon glyphicon-remove"></span>-->
<!--                Delete                        </button>-->
<!--        </div>-->
<!---->
<!--        <div class="save-cancel-group btn-group" style="">-->
<!--            <button id="save-provider" class="btn btn-primary">-->
<!--                <span class="glyphicon glyphicon-ok"></span>-->
<!--                Save                        </button>-->
<!--            <button id="cancel-provider" class="btn btn-default">-->
<!--                <span class="glyphicon glyphicon-ban-circle"></span>-->
<!--                Cancel                        </button>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="switch-view pull-right">-->
<!--        <strong>Current View</strong>-->
<!--        <div class="display-details current">Details</div>-->
<!--        <div class="display-working-plan">Working Plan</div>-->
<!--    </div>-->
<!---->
<!--    <div class="form-message alert" style="display:none;"></div>-->
<!---->
<!--    <div class="details-view provider-view">-->
<!--        <h3>Details</h3>-->
<!---->
<!--        <input type="hidden" id="provider-id" class="record-id" value="">-->
<!---->
<!--        <div class="row">-->
<!--            <div class="provider-details col-md-6">-->
<!--                <div class="form-group">-->
<!--                    <label for="provider-first-name">First Name *</label>-->
<!--                    <input type="text" id="provider-first-name" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-last-name">Last Name *</label>-->
<!--                    <input type="text" id="provider-last-name" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-email">Email *</label>-->
<!--                    <input type="text" id="provider-email" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-phone-number">Phone Number *</label>-->
<!--                    <input type="text" id="provider-phone-number" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-mobile-number">Mobile Number</label>-->
<!--                    <input type="text" id="provider-mobile-number" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-address">Address</label>-->
<!--                    <input type="text" id="provider-address" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-city">City</label>-->
<!--                    <input type="text" id="provider-city" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-state">State</label>-->
<!--                    <input type="text" id="provider-state" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-zip-code">Zip Code</label>-->
<!--                    <input type="text" id="provider-zip-code" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-notes">Notes</label>-->
<!--                    <textarea id="provider-notes" class="form-control" rows="3"></textarea>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="provider-settings col-md-6">-->
<!--                <div class="form-group">-->
<!--                    <label for="provider-username">Username *</label>-->
<!--                    <input type="text" id="provider-username" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-password">Password *</label>-->
<!--                    <input type="password" id="provider-password" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-password-confirm">Retype Password *</label>-->
<!--                    <input type="password" id="provider-password-confirm" class="form-control required">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="provider-calendar-view">Calendar *</label>-->
<!--                    <select id="provider-calendar-view" class="form-control required">-->
<!--                        <option value="default">Default</option>-->
<!--                        <option value="table">Table</option>-->
<!--                    </select>-->
<!--                </div>-->
<!---->
<!--                <br>-->
<!---->
<!--                <button type="button" id="provider-notifications" class="btn btn-default" data-toggle="button">-->
<!--                    <span class="glyphicon glyphicon-envelope"></span>-->
<!--                    <span>Receive Notifications</span>-->
<!--                </button>-->
<!---->
<!--                <br><br>-->
<!---->
<!--                <h4>Services</h4>-->
<!--                <div id="provider-services" style="overflow: hidden; padding: 0px; width: 315px;"><div class="jspContainer" style="width: 307px; height: 379px;"><div class="jspPane" style="padding: 0px; top: 0px; left: 0px; width: 307px;"><div class="col-md-12"><div class="checkbox"><label class="checkbox"><input type="checkbox" data-id="13" value="">Test Service</label></div></div></div></div></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="working-plan-view provider-view" style="display: none;">-->
<!--        <h3>Working Plan</h3>-->
<!--        <button id="reset-working-plan" class="btn btn-primary" data-hasqtip="true" oldtitle="Reset the working plan back to the default values." title="">-->
<!--            <span class="glyphicon glyphicon-repeat"></span>-->
<!--            Reset Plan</button>-->
<!--        <table class="working-plan table table-striped">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Day</th>-->
<!--                <th>Start</th>-->
<!--                <th>End</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="monday" value="">-->
<!--                            Monday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="monday-start" class="work-start hasDatepicker"></td>-->
<!--                <td><input type="text" id="monday-end" class="work-end hasDatepicker"></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="tuesday" value="">-->
<!--                            Tuesday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="tuesday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="tuesday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="wednesday" value="">-->
<!--                            Wednesday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="wednesday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="wednesday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="thursday" value="">-->
<!--                            Thursday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="thursday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="thursday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="friday" value="">-->
<!--                            Friday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="friday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="friday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="saturday" value="">-->
<!--                            Saturday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="saturday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="saturday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td>-->
<!--                    <div class="checkbox">-->
<!--                        <label><input type="checkbox" id="sunday" value="">-->
<!--                            Sunday</label>-->
<!--                    </div>-->
<!--                </td>-->
<!--                <td><input type="text" id="sunday-start" class="work-start hasDatepicker" disabled=""></td>-->
<!--                <td><input type="text" id="sunday-end" class="work-end hasDatepicker" disabled=""></td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
<!---->
<!--        <br>-->
<!---->
<!--        <h3>Breaks</h3>-->
<!---->
<!--        <span class="help-block">-->
<!--                        Add the working breaks during each day. During breaks the provider will not accept any appointments.                    </span>-->
<!---->
<!--        <div>-->
<!--            <button type="button" class="add-break btn btn-primary">-->
<!--                <span class="glyphicon glyphicon-plus"></span>-->
<!--                Add Break                        </button>-->
<!--        </div>-->
<!---->
<!--        <br>-->
<!---->
<!--        <table class="breaks table table-striped">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th>Day</th>-->
<!--                <th>Start</th>-->
<!--                <th>End</th>-->
<!--                <th>Actions</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody><tr><td class="break-day editable">Monday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Monday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Tuesday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Tuesday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Wednesday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Wednesday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Thursday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Thursday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Friday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Friday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Saturday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Saturday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Sunday</td><td class="break-start editable">11:20</td><td class="break-end editable">11:30</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr><tr><td class="break-day editable">Sunday</td><td class="break-start editable">14:30</td><td class="break-end editable">15:00</td><td><button type="button" class="btn btn-default btn-sm edit-break" title="Edit"><span class="glyphicon glyphicon-pencil"></span></button><button type="button" class="btn btn-default btn-sm delete-break" title="Delete"><span class="glyphicon glyphicon-remove"></span></button><button type="button" class="btn btn-default btn-sm save-break hidden" title="Save"><span class="glyphicon glyphicon-ok"></span></button><button type="button" class="btn btn-default btn-sm cancel-break hidden" title="Cancel"><span class="glyphicon glyphicon-ban-circle"></span></button></td></tr></tbody>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->

<pre class="html"></pre>
