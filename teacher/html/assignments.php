<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="../css/assignments.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="overlay" id="overlay"></div>
    <div class="assignment-container">
        <fieldset>
            <legend>Assignments</legend>
            <form action="../php/assignment/addAssignment.php" method="post" id="assignment-form">
                <table id="assignment-table">
                    <tr>
                        <td>Expiration Date</td>
                        <td><input id="exp" type="date" name="a_date" style="border: 1px solid black; outline: none; padding: 5px"></td>
                        <td class="error1 error">
                            
                        </td>
            
                    </tr>
                    
                    <tr>
                        <td>Title</td>
                        <td><input id="title" type="text" name="a_title" style="border: 1px solid black; outline: none; padding: 5px"></td>
                        <td>
                            <div class="error2 error"></div></td>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>Description</td>
                        <td><textarea id="description" name="a_description" name="a_description" id=""  rows="5" style="border: 1px solid black; outline: none; padding: 5px"></textarea></td>
                        <td>
                            <div class="error3 error"></div></td>
                        </td>
                    </tr>
                    <tr>
                        <td>Select Class</td>
                        <td>
                            <select name="a_user_class" id="selectClassAssignment" >
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="four">Four</option>
                                <option value="five">Five</option>
                                <option value="six">Six</option>
                                <option value="seven">Seven</option>
                                <option value="eight">Eight</option>
                                <option value="nine">Nine</option>
                                <option value="ten">Ten</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <select name="a_user_section" id="selectSectionAssignment">
                                <option value="everyone">Everyone</option>
                                <option value="A">Section A</option>
                                <option value="B">Section B</option>
                                <option value="C">Section C</option>
                            </select>
                        </td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td><div class="assignment-btn-submit"><button class="assignment-btn" onclick="assignmentValidation();">Submit</button></div></td>
                        <td></td>
                        
                    </tr>
                </table>
            </form>


            <div class="assignment-list-show-container" id="assignment-list-show-container"></div>


        </fieldset>
    </div>


    <div class="popup-assignment-submit" id="popup-assignment-submit">
        <div class="title-logo"><i class="ri-checkbox-circle-line"></i></div>
        <div class="title">Assignment Added Successfully</div>
    </div>

    <div class="popup-assignment-update-successfully" id="popup-assignment-update-successfully">
        <div class="title-logo"><i class="ri-checkbox-circle-line"></i></div>
        <div class="title">Assignment updated successfully</div>
    </div>


    <div class="popup-assignment-delete-successfully" id="popup-assignment-delete-successfully">
        <div class="title-logo"><i class="ri-checkbox-circle-line"></i></div>
        <div class="title">Assignment deleted successfully</div>
    </div>




    <div class="assignment-delete" id="assignment-delete">
        <div class="title-logo-delete"><i class="ri-question-line"></i></div>
        <div class="title">Are you sure you want to delete it?</div>
        <div class="btn-delete-assignment">
            <button class="delete-btn-assignment" style="background-color: red;" onclick="assignmentDeletePopup();">Yes</button>
            <button class="delete-btn-assignment" style="background-color: gray;" onclick="assingmentDeleteRemove();">No</button>
        </div>
    </div>

    <div class="update-assignment" id="update-assignment">
        <form action="">
            <table id="update-assignment-table">
                <tr>
                    <td>Expiration Date</td>
                </tr>
                <tr>
                    <td><input type="date"></td>
                </tr>
                <tr>
                    <td>Title</td>
                </tr>
                <tr>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td>Description</td>
                </tr>
                <tr>
                    <td><textarea name="" id="description-textarea"  rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Select Class</td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="selectClassAssignmentUpdate">
                            <option value="one">One</option>
                            <option value="two">Two</option>
                            <option value="three">Three</option>
                            <option value="four">Four</option>
                            <option value="five">Five</option>
                            <option value="six">Six</option>
                            <option value="seven">Seven</option>
                            <option value="eight">Eight</option>
                            <option value="nine">Nine</option>
                            <option value="ten">Ten</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="" id="selectSelectAssignmentUpdate">
                            <option value="everyone">Everyone</option>
                            <option value="A">Section A</option>
                            <option value="B">Section B</option>
                            <option value="C">Section C</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn-update-assignments">
                            <button type="button" class="update-btn-assingments" style="background-color: green" onclick="assignmentUpdatePopup();">Update</button>
                            <button type="button" class="update-btn-assingments" style="background-color: red" onclick="assignmentUpdateRemeove();">Cancel</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>




    <script src="../js/assignments.js"></script>
</body>
</html>