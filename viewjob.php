<?php
include 'header.php';
include 'user_navbar.php';
if(isset($_SESSION['user_id'])){
	$user_id = $_SESSION['user_id'];
?>
<html>
<head>
</head>
<body>
<div class = "container">
<div class="title">
<div class="hoverable">
<div class="div4">
<table>
<tbody>
<tr>
<td>
<table class="hoverable with-hover with-padding">
    <tbody>
        <tr>
            <td>Profile Type:</td>
            <td><span id="ctl00_pageholder_lblSegment">Operations</span></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Designation:</td>
            <td><span id="ctl00_pageholder_lblDesignation">Trainee</span></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Annual Salary:</td>
            <td><span id="ctl00_pageholder_lblAnnualSalary" class="annualSalary">250000</span></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Joining Location:</td>
            <td><span id="ctl00_pageholder_lblJoiningLocation">Hyderabad</span></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Venue:</td>
            <td><span id="ctl00_pageholder_lblCampusAt" class="lblCampusAt">Hyderabad</span></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <td>Event Date:</td>
            <td><span id="ctl00_pageholder_lblInterviewDate" class="interviewDate">28 Feb, 2019 10:00 AM</span></td>
        </tr>
    </tbody>
</table>

<table id="ctl00_pageholder_divJobStatus" class="statusjob">
    <tbody>
        <tr>
            <td id="ctl00_pageholder_applyaction" class="action"><a class="btn btn-sm btn-success" href=""> Apply</a></td>
        </tr>
    </tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
        <div class="spacer">&nbsp;</div>
        <div class="spacer">
            <div id="ctl00_pageholder_divJobDetails">
                <div class="title"><h3>Job Details</h3></div>
                <hr>
                <div class="html-content">
                    <p><strong>Roles And Responsibilities:</strong></p>
                    <ul>
                        <li>Responsible for Travel Tripper&rsquo;s connectivity with existing IT vendors such as PMS and OTA</li>
                        <li>The main point of contact between clients and connectivity vendors, current and potential and be able to maintain company relationships while negotiating on behalf of Travel Tripper</li>
                        <li>Implementing, testing, maintaining and troubleshooting all Travel Tripper&rsquo;s connectivity</li>
                        <li>Develop and educate both Travel Tripper clients and internal team of connectivity solutions</li>
                        <li>Able to monitor ticket-based service desk issues. Give technical support to clients and troubleshoot issues</li>
                        <li>Coordination and facilitation of the rollout of new interface connections</li>
                        <li>Communication of amendments in the interface to the partners and coordination of the changes</li>
                        <li>Identify areas and testing scenarios to increase efficiency through integration process for existing problems</li>
                    </ul>
                    <p><strong>Joining Location:</strong>&nbsp;Hyderabad</p>
                    <p><strong>Joining Period:</strong>&nbsp;April 2019</p>
                    <p><strong>Interview Location:</strong>&nbsp;Hyderabad</p>
                    <p><strong>Salary:</strong></p>
                    <ul>
                        <li>INR 10,000 stipend (6 months internship )</li>
                        <li>2.5 LPA + Allowances (post internship)</li>
                    </ul>
                    <p><strong>Bond:</strong>&nbsp;None</p>
                    <p><em><strong>Note:</strong></em></p>
                    <ul>
                        <li><em><strong>Candidates from Andhra Pradesh and Telangana are only eligible to apply.</strong></em></li>
                        <li><strong>Designation during the internship will be Trainee and post internship the designation will be&nbsp;</strong><em><strong>Associate Client Service Executive</strong></em></li>
                    </ul>
                </div>
            </div>

            <div class="spacer">&nbsp;</div>
            <div id="ctl00_pageholder_divJobSelection">
                <div class="title"><h3>Selection Process</h3></div>
                <hr>
                <div class="html-content">
                    <ul>
                        <li>Online Application through CoCubes.</li>
                        <li>Candidates will be short-listed on the basis of their PRE-ASSESS&reg; scores and Online Resume. Request you to update your Resume online on CoCubes.</li>
                        <li>Shortlisted candidates need to travel to venue for further rounds of interview. (Venue details will be shared well in advance)</li>
                        <li>Further Rounds: 1) Written SQL Test and Face To face Discussion 2) Online SQL Test 3) Skype Discussion with US Team</li>
                    </ul>
                </div>
            </div>
            <div class="spacer">&nbsp;</div>
            <div class="title"><h3>Selection Criteria</h3></div>
            <hr>
            <div class="html-content">
                <div><strong>Throughout percentage :&nbsp;</strong>60 - 100<br /><strong>College percentage :&nbsp;</strong>60 - 100<br /><strong>Batch :&nbsp;</strong>2019<br /><strong>Degree :&nbsp;</strong>Bachelor of Engineering<br /><strong>Branch:&nbsp;</strong>Computer Science, Information Technology<br /><strong>Bond Period :&nbsp;</strong>No Bond<br /><strong>Communication Skills :&nbsp;</strong>Prefer good communication skill<br /><strong>Backlogs :&nbsp;</strong>No current backlog<br /><strong>WorkEx :&nbsp;</strong>No Preference<br /><strong>Gender :&nbsp;</strong>No Preference</div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
$(".selection-1").select2({
	minimumResultsForSearch: 20,
	dropdownParent: $('#dropDownSelect1')
});
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
$('.block2-btn-addcart').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to cart !", "success");
	});
});

$('.block2-btn-addwishlist').each(function(){
	var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
	$(this).on('click', function(){
		swal(nameProduct, "is added to wishlist !", "success");
	});
});
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>

<?php
}
else {
	header('Location:login.php');
}
