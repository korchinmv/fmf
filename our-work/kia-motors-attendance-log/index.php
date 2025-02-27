<?php
    $arHeader = [
       'title' => 'KIA Motors Attendance log',
       'description' => 'KIA Motors Attendance log',
    ];
    include $_SERVER['DOCUMENT_ROOT'].'/include/header.php';
?>

<main id="case__detailed" class="case">
    <div class="case__banner case__banner-kia-attendance-log" style="background-image: url(/images/kia-attendance-first-screen.png);" >
        <div class="case__banner-overlay">
            <div class="wrap_container">
                <div class="case__banner-iner">
                    <div class="case__banner-breadcrumbs">
                       <ul class="breadcrumbs__list">
                            <li>
                                <a href="/our-work/">
                                    <svg style="vertical-align: text-top;" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 16 16"><path d="M10.56 3.27a1 1 0 0 0-1.41-1.42l-5.3 5.3a1 1 0 0 0 0 1.41l5.3 5.3a1 1 0 0 0 1.41-1.42L6.33 8.2a.5.5 0 0 1 0-.71l4.23-4.23z"></path></svg>
                                    To Cases
                                </a>
                            </li>
                        </ul>
                    </div>
                    <h1 class="case__title">KIA Motors<br>Attendance log</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="case__property">
        <div class="wrap_container">
            <ul class="case__property-list">
                <li class="case__property-item">
                    <div class="case__property-name">Customer</div>
                    <div class="case__property-more">
                        <div class="case__property-text">
                            <p>KIA Motors, a prestigious and longstanding Korean automotive brand founded in 1944, is renowned for manufacturing vehicles that are perfectly adapted to various country operation conditions, catering to diverse needs and preferences.</p>
                        </div>
                        <div class="case__property-img"><img src="/images/seo-kia-logo.svg" alt=""></div>
                    </div>
                </li>
                <li class="case__property-item">
                    <div class="case__property-name">Goals</div>
                    <div class="case__property-more">
                        <div class="case__property-text">
                            <ul class="_list">
                                <li>Decrease the life cycle of the employee time tracking process;</li>
                                <li>Reduce financial expenditure on expendable materials.</li>
                            </ul>                                    
                        </div>
                    </div>
                </li>
                <li class="case__property-item">
                    <div class="case__property-name">Tasks</div>
                    <div class="case__property-more">
                        <div class="case__property-text">
                            <ul class="_list">
                                <li>Reduce labor costs associated with the time tracking process;</li>
                                <li>Transition from paper to electronic media.</li>
                            </ul>   
                        </div>
                    </div>
                </li>
                <li class="case__property-item">
                    <div class="case__property-name">Solution</div>
                    <div class="case__property-more">
                        <div class="case__property-text">
                            <p>Assign functions such as notification, transfer, and storage within the employee time tracking process to a computer program.
                                Automate the employee time tracking process.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="case__content">
        <div class="wrap_container">
            <div class="case__content-inner">
                <ul class="case__content-list">
                    <li class="case__content-item">
                        <h2>Description</h2>
                        <div class="case__content-more">
                            <div class="case__content-more-wraper">
                                <p>The "Attendance Log" module has been developed for the corporate portal. Each employee is assigned a "Key Code" in the system, which serves as their passcode at the checkpoint. </p>
                                <div class="case__content-img">
                                    <img src="/images/kia-attendance-description.png" alt="">
                                </div>
                                <p>In case an employee is late or leaves early, the information is recorded in the Attendance Log. This log includes:</p>
                                <ul class="_list">
                                    <li>Work time;</li>
                                    <li>Delays;</li>
                                    <li>Early leaving;</li>
                                    <li>Notified in advance;</li>
                                    <li>Notified by fact.</li>
                                </ul>
                                <p>Additionally, the module allows employees to coordinate their departures or delays with their supervisors.</p>
                                <div class="case__content-img">
                                    <img src="/images/kia-attendance-description2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="case__content-item">
                        <h2>Reports</h2>
                        <div class="case__content-more">
                            <div class="case__content-more-wraper">
                                <p>The system generates an excel-based attendance report for each employee, which is sent to both the employee and their supervisor either weekly or monthly.</p>
                                <p>The report includes:</p>
                                <ul class="_list">
                                    <li>Employee’s working hours;</li>
                                    <li>Account of business trips;</li>
                                    <li>Account of vacations;</li>
                                    <li>Statistics on delays;</li>
                                    <li>Statistics on early departures;</li>
                                    <li>Deviations between actual and planned working hours.</li>
                                </ul>
                                <p>The system enables the uploading of attendance reports for any specified period.
                                </p>
                                <p>Additionally, a departmental attendance log has been developed for supervisors. This log displays the attendance details of all employees within the department and allows for the uploading of reports in Excel format.</p>
                                <div class="case__content-img">
                                    <img src="/images/kia-attendance-description3.png" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="case__content case-section case__content--white case-result-wrapper">
        <div class="wrap_container">
            <div class="case__content-inner">
                <ul class="case__content-list">
                    <li class="case__content-item">
                        <h2 class="_mt-0">Results</h2>
                        <div class="case__content-more">
                            <div class="case__content-more-wraper">
                                <div class="case__content-section">
                                    <p>Financial expenditures on expendable materials such as paper and printer ink have been eliminated.</p>
                                    <p>The life cycle of the employee time tracking process has been reduced by 80%.</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/include/footer.php'; ?>