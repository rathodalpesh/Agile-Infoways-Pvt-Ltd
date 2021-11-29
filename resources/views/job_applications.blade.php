<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Applications</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

           h3{
                font-family: Calibri; 
                font-size: 25pt;         
                font-style: normal; 
                font-weight: bold; 
                color:SlateBlue;
                text-align: center; 
                text-decoration: underline
                }

                table{
                font-family: Calibri; 
                color:white; 
                font-size: 13pt; 
                font-style: normal;
                font-weight: bold;
                text-align:; 
                background-color: SlateBlue; 
                border-collapse: collapse; 
                border: 2px solid navy
                }
                
                table.inner{
                border: 0px
                }
        }
        </style>        

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <a href="{{ route('job_applications') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Job Applications</a>
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                {!! Form::model([], ['route' => [ 'job_applications.store'], 'id' => 'user_form', 'method' => 'post', 'enctype' => 'multipart/form-data', 'class' => 'kt-form', 'files' => true]) !!}
                        {{csrf_field()}}
                        <h3>Job Application Form</h3>

                        @include('alert')

                        <table align="center" cellpadding = "12">
                        <!----- Name ---------------------------------------------------------->
                        <tr>
                            <td>NAME</td>
                            <td><input type="text" name="name" maxlength="30"/>
                            (max 30 characters a-z and A-Z)
                            </td>
                        </tr>
                        <!----- Email Id ---------------------------------------------------------->
                        <tr>
                            <td>EMAIL ID</td>
                            <td><input type="text" name="email_id" maxlength="100" /></td>
                        </tr>
                        <!----- Mobile Number ---------------------------------------------------------->
                        <tr>
                            <td>MOBILE NUMBER</td>
                            <td>
                            <input type="text" name="mobile_number" maxlength="10" />
                            (10 digit number)
                            </td>
                        </tr>
                        <!----- Gender ----------------------------------------------------------->
                        <tr>
                            <td>GENDER</td>
                            <td>
                            Male <input type="radio" name="gender" value="Male" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Female <input type="radio" name="gender" value="Female" />
                            </td>
                        </tr>
                        <!----- Address ---------------------------------------------------------->
                        <tr>
                            <td>ADDRESS <br /><br /><br /></td>
                            <td><textarea name="address" rows="4" cols="30"></textarea></td>
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
                                <td><input type="text" name="classX_board" maxlength="30" /></td>
                                <td><input type="text" name="classX_percentage" maxlength="30" /></td>
                                <td><input type="text" name="classX_passing" maxlength="30" /></td>
                                </tr>
                                <tr>
                                <td>2</td>
                                <td>Class XII</td>
                                <td><input type="text" name="classXII_board" maxlength="30" /></td>
                                <td><input type="text" name="classXII_percentage" maxlength="30" /></td>
                                <td><input type="text" name="classXII_passing" maxlength="30" /></td>
                                </tr>
                                <tr>
                                <td>3</td>
                                <td>Graduation</td>
                                <td><input type="text" name="graduation_board" maxlength="30" /></td>
                                <td><input type="text" name="graduation_percentage" maxlength="30" /></td>
                                <td><input type="text" name="graduation_passing" maxlength="30" /></td>
                                </tr>
                                <tr>
                                <td>4</td>
                                <td>Masters</td>
                                <td><input type="text" name="masters_board" maxlength="30" /></td>
                                <td><input type="text" name="masters_percentage" maxlength="30" /></td>
                                <td><input type="text" name="masters_passing" maxlength="30" /></td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        
                        <!----- Known Languages ---------------------------------------------------------->
                        <tr>
                            <td>Known Languages </td>
                            <td>
                                <input type="checkbox" id="hindi" name="hindi" value="hindi"> Hindi  
                                <input name="hindi_read" type="checkbox" value="read" /> Read        
                                <input name="hindi_write" type="checkbox" value="write" /> Write        
                                <input name="hindi_speak" type="checkbox" value="speak" /> Speak  
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="checkbox" id="english" name="english" value="english"> English  
                                <input name="english_read" type="checkbox" value="read" /> Read        
                                <input name="english_write" type="checkbox" value="write" /> Write        
                                <input name="english_speak" type="checkbox" value="speak" /> Speak  
                            </td>
                        </tr>
                        <tr>
                            <td></td>                            
                            <td>
                                <input type="checkbox" id="gujrati" name="gujrati" value="gujrati"> Gujrati  
                                <input name="gujrati_read" type="checkbox" value="read" /> Read        
                                <input name="gujrati_write" type="checkbox" value="write" /> Write        
                                <input name="gujrati_speak" type="checkbox" value="speak" /> Speak  
                            </td>
                        </tr>
                        
                        <!----- Technical Experience ---------------------------------------------------------->
                        <tr>
                            <td>Technical Experience </td>
                            <td>
                                <input type="checkbox" id="php" name="php" value="php"> PHP
                                <input name="php_type" type="radio" value="beginner" /> Beginner      
                                <input name="php_type" type="radio" value="mediator" /> Mediator      
                                <input name="php_type" type="radio" value="expert" /> Expert
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="checkbox" id="mysql" name="mysql" value="mysql"> MySql
                                <input name="mysql_type" type="radio" value="beginner" /> Beginner      
                                <input name="mysql_type" type="radio" value="mediator" /> Mediator      
                                <input name="mysql_type" type="radio" value="expert" /> Expert
                            </td>
                        </tr>
                        <tr>
                            <td></td>                            
                            <td>
                                <input type="checkbox" id="laravel" name="laravel" value="laravel"> Laravel
                                <input name="laravel_type" type="radio" value="beginner" /> Beginner      
                                <input name="laravel_type" type="radio" value="mediator" /> Mediator      
                                <input name="laravel_type" type="radio" value="expert" /> Expert
                            </td>
                        </tr>
                        <tr>
                            <td></td>                            
                            <td>
                                <input type="checkbox" id="oracle" name="oracle" value="oracle"> Oracle
                                <input name="oracle_type" type="radio" value="beginner" /> Beginner      
                                <input name="oracle_type" type="radio" value="mediator" /> Mediator      
                                <input name="oracle_type" type="radio" value="expert" /> Expert
                            </td>
                        </tr>
                        <!----- Preferred Location ---------------------------------------------------------->
                        <tr>
                            <td>Preferred Location</td>
                            <td>
                            <select name="preferred_location" id="preferred_location">
                                <option value="">Select Preferred Location</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Bhavnagar">Bhavnagar</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Surat">Surat</option>
                                <option value="Vadodara">Vadodara</option>
                            </select>
                            </td>
                        </tr>
                        <!----- Expected CTC ---------------------------------------------------------->
                        <tr>
                            <td>Expected CTC</td>
                            <td>
                            <input type="text" name="expected_ctc"/>
                            </td>
                        </tr>
                        <!----- Current CTC ---------------------------------------------------------->
                        <tr>
                            <td>Current CTC</td>
                            <td><input type="text" name="current_ctc"/>
                            </td>
                        </tr>
                        <!----- Notice Period ---------------------------------------------------------->
                        <tr>
                            <td>Notice Period</td>
                            <td><input type="text" name="notice_period"/>
                            </td>
                        </tr>
                        <!----- Submit and Reset ------------------------------------------------->
                        <tr>
                            <td colspan="2" align="center">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                            </td>
                        </tr>
                        </table>
                {{ Form::close() }}
            </div>
        </div>
    </body>
</html>
    
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/popper.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('js/google-map.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script>

</script>
