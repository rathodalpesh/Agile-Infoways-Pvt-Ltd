
        <!----- Name ---------------------------------------------------------->
        <tr>
            <td>NAME</td>
            <td><input type="text" name="name" maxlength="30" value="{{ $application->name }}"/>
            (max 30 characters a-z and A-Z)
            </td>
        </tr>
        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>EMAIL ID</td>
            <td><input type="text" name="email_id" maxlength="100" value="{{ $application->email_id }}"/></td>
        </tr>
        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER</td>
            <td>
            <input type="text" name="mobile_number" maxlength="10"  value="{{ $application->mobile_number }}"/>
            (10 digit number)
            </td>
        </tr>
        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
            Male <input type="radio" name="gender" value="Male" <?= $application->gender == "Male" ? 'checked="checked"' : ''; ?> />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Female <input type="radio" name="gender" value="Female" <?= $application->gender == "Female" ? 'checked="checked"' : ''; ?>/>
            </td>
        </tr>
        <!----- Address ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="address" rows="4" cols="30" >{{ $application->address }}</textarea></td>
        </tr>
        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
            <td>
            <table>
                <tr>
                <td align="center"><b>Sl.No.</b></td>
                <td align="center"><b>Examination</b></td>
                <td align="center"><b>Board</b></td>
                <td align="center"><b>Percentage</b></td>
                <td align="center"><b>Year of Passing</b></td>
                </tr>
                <tr>
                <td>1</td>
                <td>Class X</td>
                <td><input type="text" name="classX_board" maxlength="30"   value="{{ $application->classX_board }}"/></td>
                <td><input type="text" name="classX_percentage" maxlength="30"   value="{{ $application->classX_percentage }}"/></td>
                <td><input type="text" name="classX_passing" maxlength="30"   value="{{ $application->classX_passing }}"/></td>
                </tr>
                <tr>
                <td>2</td>
                <td>Class XII</td>
                <td><input type="text" name="classXII_board" maxlength="30"   value="{{ $application->classXII_board }}"/></td>
                <td><input type="text" name="classXII_percentage" maxlength="30"   value="{{ $application->classXII_percentage }}"/></td>
                <td><input type="text" name="classXII_passing" maxlength="30"   value="{{ $application->classXII_passing }}"/></td>
                </tr>
                <tr>
                <td>3</td>
                <td>Graduation</td>
                <td><input type="text" name="graduation_board" maxlength="30"   value="{{ $application->graduation_board }}"/></td>
                <td><input type="text" name="graduation_percentage" maxlength="30"   value="{{ $application->graduation_percentage }}"/></td>
                <td><input type="text" name="graduation_passing" maxlength="30"   value="{{ $application->graduation_passing }}"/></td>
                </tr>
                <tr>
                <td>4</td>
                <td>Masters</td>
                <td><input type="text" name="masters_board" maxlength="30"   value="{{ $application->masters_board }}"/></td>
                <td><input type="text" name="masters_percentage" maxlength="30"   value="{{ $application->masters_percentage }}"/></td>
                <td><input type="text" name="masters_passing" maxlength="30"   value="{{ $application->masters_passing }}"/></td>
                </tr>
            </table>
            </td>
        </tr>
        
                        
        <!----- Known Languages ---------------------------------------------------------->
        <tr>
            <td>Known Languages </td>
            <td>
                <input type="checkbox" id="hindi" name="hindi" value="hindi" <?= $application->hindi == "hindi" ? 'checked="checked"' : ''; ?>> Hindi  
                <input name="hindi_read" type="checkbox" value="read" <?= $application->hindi_read == "read" ? 'checked="checked"' : ''; ?>/> Read        
                <input name="hindi_write" type="checkbox" value="write" <?= $application->hindi_write == "write" ? 'checked="checked"' : ''; ?>/> Write        
                <input name="hindi_speak" type="checkbox" value="speak" <?= $application->hindi_speak == "speak" ? 'checked="checked"' : ''; ?>/> Speak  
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" id="english" name="english" value="english" <?= $application->english == "english" ? 'checked="checked"' : ''; ?>> English  
                <input name="english_read" type="checkbox" value="read" <?= $application->english_read == "read" ? 'checked="checked"' : ''; ?>/> Read        
                <input name="english_write" type="checkbox" value="write" <?= $application->english_write == "write" ? 'checked="checked"' : ''; ?>/> Write        
                <input name="english_speak" type="checkbox" value="speak" <?= $application->english_speak == "speak" ? 'checked="checked"' : ''; ?>/> Speak  
            </td>
        </tr>
        <tr>
            <td></td>                            
            <td>
                <input type="checkbox" id="gujrati" name="gujrati" value="gujrati" <?= $application->gujrati == "gujrati" ? 'checked="checked"' : ''; ?>> Gujrati  
                <input name="gujrati_read" type="checkbox" value="read" <?= $application->gujrati_read == "read" ? 'checked="checked"' : ''; ?>/> Read        
                <input name="gujrati_write" type="checkbox" value="write" <?= $application->gujrati_write == "write" ? 'checked="checked"' : ''; ?>/> Write        
                <input name="gujrati_speak" type="checkbox" value="speak" <?= $application->gujrati_speak == "speak" ? 'checked="checked"' : ''; ?>/> Speak  
            </td>
        </tr>
        
        <!----- Technical Experience ---------------------------------------------------------->
        <tr>
            <td>Technical Experience </td>
            <td>
                <input type="checkbox" id="php" name="php" value="php" <?= $application->php == "php" ? 'checked="checked"' : ''; ?>> PHP
                <input name="php_type" type="radio" value="beginner" <?= $application->php_type == "beginner" ? 'checked="checked"' : ''; ?>/> Beginner      
                <input name="php_type" type="radio" value="mediator" <?= $application->php_type == "mediator" ? 'checked="checked"' : ''; ?>/> Mediator      
                <input name="php_type" type="radio" value="expert" <?= $application->php_type == "expert" ? 'checked="checked"' : ''; ?>/> Expert
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" id="mysql" name="mysql" value="mysql" <?= $application->mysql == "mysql" ? 'checked="checked"' : ''; ?>> MySql
                <input name="mysql_type" type="radio" value="beginner" <?= $application->mysql_type == "beginner" ? 'checked="checked"' : ''; ?>/> Beginner      
                <input name="mysql_type" type="radio" value="mediator" <?= $application->mysql_type == "mediator" ? 'checked="checked"' : ''; ?>/> Mediator      
                <input name="mysql_type" type="radio" value="expert" <?= $application->mysql_type == "expert" ? 'checked="checked"' : ''; ?>/> Expert
            </td>
        </tr>
        <tr>
            <td></td>                            
            <td>
                <input type="checkbox" id="laravel" name="laravel" value="laravel" <?= $application->laravel == "laravel" ? 'checked="checked"' : ''; ?>> Laravel
                <input name="laravel_type" type="radio" value="beginner" <?= $application->laravel_type == "beginner" ? 'checked="checked"' : ''; ?>/> Beginner      
                <input name="laravel_type" type="radio" value="mediator" <?= $application->laravel_type == "mediator" ? 'checked="checked"' : ''; ?>/> Mediator      
                <input name="laravel_type" type="radio" value="expert" <?= $application->laravel_type == "expert" ? 'checked="checked"' : ''; ?>/> Expert
            </td>
        </tr>
        <tr>
            <td></td>                            
            <td>
                <input type="checkbox" id="oracle" name="oracle" value="oracle" <?= $application->oracle == "oracle" ? 'checked="checked"' : ''; ?>> Oracle
                <input name="oracle_type" type="radio" value="beginner" <?= $application->oracle_type == "beginner" ? 'checked="checked"' : ''; ?>/> Beginner      
                <input name="oracle_type" type="radio" value="mediator" <?= $application->oracle_type == "mediator" ? 'checked="checked"' : ''; ?>/> Mediator      
                <input name="oracle_type" type="radio" value="expert" <?= $application->oracle_type == "expert" ? 'checked="checked"' : ''; ?>/> Expert
            </td>
        </tr>
        
        <!----- Preferred Location ---------------------------------------------------------->
        <tr>
            <td>Preferred Location</td>
            <td>
            <select name="preferred_location" id="preferred_location">
                <option value="">Select Preferred Location</option>
                <option value="Ahmedabad" <?= $application->preferred_location == 'Ahmedabad' ? ' selected="selected"' : '';?>>Ahmedabad</option>
                <option value="Bhavnagar" <?= $application->preferred_location == 'Bhavnagar' ? ' selected="selected"' : '';?>>Bhavnagar</option>
                <option value="Rajkot" <?= $application->preferred_location == 'Rajkot' ? ' selected="selected"' : '';?>>Rajkot</option>
                <option value="Surat" <?= $application->preferred_location == 'Surat' ? ' selected="selected"' : '';?>>Surat</option>
                <option value="Vadodara" <?= $application->preferred_location == 'Vadodara' ? ' selected="selected"' : '';?>>Vadodara</option>
            </select>
            </td>
        </tr>
        <!----- Expected CTC ---------------------------------------------------------->
        <tr>
            <td>Expected CTC</td>
            <td>
            <input type="text" name="expected_ctc"  value="{{ $application->expected_ctc }}"/>
            </td>
        </tr>
        <!----- Current CTC ---------------------------------------------------------->
        <tr>
            <td>Current CTC</td>
            <td><input type="text" name="current_ctc"  value="{{ $application->current_ctc }}"/>
            </td>
        </tr>
        <!----- Notice Period ---------------------------------------------------------->
        <tr>
            <td>Notice Period</td>
            <td><input type="text" name="notice_period"  value="{{ $application->notice_period }}"/>
            </td>
        </tr>