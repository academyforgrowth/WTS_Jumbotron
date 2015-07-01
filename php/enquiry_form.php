                        <form name="htmlform" method="post" action="html_form_send.php">
                            <div style="margin-top: 40px;" id="meet-form" class="form-horizontal">
                                <div class="col-xs-12">
                                    <input type="text" name="first_name" value="Your First Name" onBlur="if(this.value == '') { this.value='Your First Name'}" onFocus="if (this.value == 'Your First Name') {this.value=''}" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12">
                                    <input type="text" name="last_name" value="Your Last Name" onBlur="if(this.value == '') { this.value='Your Last Name'}" onFocus="if (this.value == 'Your Last Name') {this.value=''}" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12">
                                    <input type="text" name="comments" value="Company Name" onBlur="if(this.value == '') { this.value='Company Name'}" onFocus="if (this.value == 'Company Name') {this.value=''}" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12">
                                    <input type="text" name="telephone" value="Phone" onBlur="if(this.value == '') { this.value='Phone'}" onFocus="if (this.value == 'Phone') {this.value=''}" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12">
                                    <input type="email" name="email" value="Email" onBlur="if(this.value == '') { this.value='Email'}" onFocus="if (this.value == 'Email') {this.value=''}" class="form-control" />
                                </div>
                                <br />
                                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 text-center">
                                </div>
                              <div class="row">
                                                <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4 text-center">
                                      <button class="btn btn-lg btn-danger" style="margin-top: 6px;" type="submit">Submit</button>
                                  </div>
                              </div>
                            </div>
                        </form>