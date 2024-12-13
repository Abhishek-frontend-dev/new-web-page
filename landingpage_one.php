
<body>
   


<!-- LANDING PAGE CSS START HERE ------------------------------------- -->

<style>
    @font-face {
  font-family: ProximaNovaaltBold;
  src: url(./Fonts/ProximaNovaAltBold.otf);
}

@font-face {
  font-family: ProximaNovaaltRegular;
  src: url(./Fonts/ProximaNovaAltRegular.otf);
}

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Hero Section */
.herosection {
    display: flex;
    padding: 4rem;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url(images/bannernew.webp);
    background-size: cover;
    background-position: center;
}

.hero-left {
    width: 50%;
    padding: 0 2rem 0;
}

.btn-text {
    font-weight: 400;
    font-size: 1.2rem;
    font-family: ProximaNovaaltRegular;
}

.btn-top img {
    width: 3vw;
}

.header-heading {
    font-size: 2.428rem;
    color: #1c4496;
}

.hero-btn {
    background-color: #e6638a;
    font-weight: 300;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-family: ProximaNovaaltRegular;
    transition: all ease 0.5s;
    font-size: 1rem;
    padding: 9px 15px;
    margin: 0px 16px 0px 0px;
}
.hero-btn:hover{
  box-shadow: 0 0 10px 0 black;
}

.hero-right{
 width: 50%;
 padding: 0 2rem 0;
}

.hero-right img {
    max-width: 100%;
    height: auto;
}

.hero-text {
    font-family: "ProximaNovaRegular", Helvetica, sans-serif;
    margin-top: 20px 0px;
    line-height: 2;
    color: #666666;
    font-size: 1rem;
}
.hero-sub-text{
 margin: 20px 0px;
  font-size: 1.5rem;
  display: block;
  color: #091c09;
  font-family: ProximaNovaaltBold;
}

/* Media Queries for Responsiveness */

@media screen and (max-width: 768px) {
    .herosection {
        padding: 1.3rem;
        flex-direction: column; 
        align-items: center; 
    }

    .hero-left {
        margin: 0;
        width: 100%;
        text-align: left; 
    }

    .header-heading {
        font-size: 2.5rem; 
    }

    .hero-btn {
        font-size: 14px;
        align-items: center;
        text-align: center;
    }

    .btn-top {
        margin-bottom: 1rem; 
        align-items: center;
        text-align: center;
    }

    .hero-right img {
        display: none;
    }
}

/* For even smaller devices (phones in portrait mode) */
@media screen and (max-width: 480px) {
    .header-heading {
        font-size: 2rem;
    }

    .hero-btn {
        font-size: 18px;
        padding: 8px 12px;
    }

    .btn-top {
        padding: 0.5rem;
    }
    .btn-top img{
     width: 6vw;
    }

    .btn-text {
        font-size: 1rem;
    }

    .hero-text {
        font-size: 18px;
    }
}

/* Task Section Layout */
.task-section {
    display: flex;
    padding: 3.75rem 6.25rem 0rem;
    flex-wrap: wrap;
    justify-content: space-evenly;
    overflow: hidden;
  }
  
  .full-width-heading{
    text-align: center;
    font-family: ProximaNovaaltBold;
    margin: 0px 0px 1.375rem;
    font-size: 2rem;
    color: #091C39;
    font-weight:bolder;
  }
  .full-width-para{
    font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
   font-size: 1.3rem;
   text-align: center;
   color: #666666;
  }
  
  .task-right {
    width: 100%;
  }
  
  .tab-links:hover {
    color: #000;
  }
  
  
  .full-width {
    width: 100%;
    font-size: 1rem;
    line-height: 1.6;
  }

  .full-width-para{
    font-family: ProximaNovaaltRegular, sans-serif;
    font-size: 1.1rem;
    color: #666666;
  }
  
  /* Two Columns Layout */
  .two-col {
    display: flex;
    padding: 20px;
    margin: 20px auto;
    max-width: 1200px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }
  
  .left {
    flex: 1;
    margin-right: 1rem;
    width: 50vw;

  }

  .left img{
width: 100%;
  }
  
  .right {
    flex: 1;
    padding: 2rem;
  }
  
 /* .task-list {
    list-style: none;
  }*/
  
  
  .task-list li {
    display: flex;
    align-items: center;
    margin: 1rem;
  }
  
  /*.task-list li img {
    width: 20px;
    margin-right: 10px;
  }*/

  
  .task-text {
    font-size: 1rem;
    color: #666666; 
    font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
    padding: 1rem;
  }
  
  /* Responsive Design */
  @media (max-width: 1024px) {
   .task-right {
      width: 100%;
    }
    
  
    .two-col {
      flex-direction: column;
    }
  
    .left {
      margin-bottom: 1rem;
    }
    
  .left img{
    width: 70vw;
      }
     
  }
  
  @media (max-width: 768px) {
  
    .full-width-heading {
      font-size: 1.5rem;
    }
  
    .full-width {
      font-size: 0.9rem;
    }
    .task-section{
      padding: 15px;
      align-items: center;
      justify-content: center;
    }
    .left img{
      width: 80vw;
      padding-left: 1rem;
        }
      
  }

/*features card start hare*/

.Key-features {
  text-align: center;
  padding: 3.75rem 6.25rem 0rem;
}

.kye-features-heading {
  font-family: ProximaNovaaltBold;
  font-size: 1.75rem;
  margin-bottom: 2rem;
  text-align: center;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center; 
}

.card {
  width: 30%; 
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  align-items: flex-start;
  background-color: #fff;
  padding: 1rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease;
}

.card-1-img img, .card-1-img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.card h3 {
  font-size: 1.3rem;
  color: #091C39;
  margin-bottom: 0.5rem;
  font-family: ProximaNovaaltBold;
  min-height: 3rem;
  font-weight: bolder;
  text-align: start;
}

.card p {
  font-size: 1rem;
  line-height: 1.5;
  color: #555;
  margin-bottom: 1rem;
  font-family: ProximaNovaaltRegular, sans-serif;
  flex-grow: 1;
   text-align: start;
}

/* Responsive styles */
@media (max-width: 768px) {
  .Key-features {
    padding: 2rem 1rem 0rem; /* Reduced padding on small screens */
  }

  .card-container {
    flex-direction: column; /* Stack cards vertically */
    gap: 1.5rem;
  }

  .card {
    width: 100%; /* Full width for smaller screens */
  }
}

/*features card end hare*/


/* what-makes Container start here */
.what-makes-container {
  border-radius: 30px;
  padding: 3.75rem 6.25rem 0rem;
  align-items: center;
  justify-content: center;
}

/* Heading Styling */
.what-make-heading {
  text-align: center;
  align-items: center;
  font-size: 2rem;
  padding: 1.5rem;
  font-family: ProximaNovaaltBold;
  font-weight: bolder;
  color: #091C39;
}

/* Paragraph Styling */
.what-makes-para {
  font-size: 1rem;
  color: #666666; 
  font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
  padding: 1rem;
  text-align: center;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .what-makes-container {
    padding: 2rem 1rem 0rem;
  }

  .what-make-heading {
    font-size: 1.5rem;
  }

  .what-makes-para {
    font-size: 0.9rem;
  }
}

/*.what-makes-two{
  display: flex;
  flex-direction: row;
  padding: 2rem;
  justify-content: center;
  align-items: center;
  gap: 3rem;
}
.what-makes-img{
  width: 40vw;
  height: auto;
}

.what-makes-two img{
  max-width: 100%;
}

.what-make-btn{
   padding: 9px 15px;
    background-color: #E9628e;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-left: 1.4rem;
    margin-top: 1rem;
    font-family: "ProximaNovaRegular"; 
    transition: ease all 0.5s;
}

.what-make-btn:hover{
  box-shadow: 0 0 10px 0 black;
}*/

/*what makes end*/

/*what makes responsive for mobile*/

@media (max-width: 768px) {
  .what-makes-two{
    flex-direction: column;
    width: 100%;
  }
  
  .what-makes-img{
  width: 60vw;
  }
  .task-list li{
    font-size: 1rem;
  }
  .task-text{
    font-size: 1.3rem;
  }
  .what-make-heading{
    font-size: 1.7rem;
  }
}

/*what makes end here*/

/* more-task start here */

.more-task-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 columns */
  gap: 1rem;
  padding: 3.75rem 6.25rem 0rem;
}

.more-task-itme {
  background-color: #f9f9f9;
  padding: 1rem;
  border-radius: 20px;
  transition: 0.5s all ease;
  text-decoration: none;
}

.more-task-itme:hover {
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.333);
  cursor: pointer;
  transform: scaleX(120deg);
}

.more-task-text {
  font-size: 1.4rem;
  font-weight: 900;
  color: #091C39;
  font-family: ProximaNovaaltBold;
}

.more-task-itme img {
  padding: 1rem;
  width: 100%;
}

.more-task-heading {
  text-align: center;
  font-size: 1.75rem;
  color: #091C39;
  font-family: ProximaNovaaltBold;
  margin-top: 2.4rem;
}

.more-task-para {
  text-align: center;
  padding: 1.2rem;
  font-size: 1.1rem;
  font-family: ProximaNovaaltRegular;
  color: #666666;
}

/* Responsive styles */
@media (max-width: 1024px) {
  .more-task-container {
    grid-template-columns: repeat(2, 1fr);
    padding: 3.75rem 3.75rem 0rem; 
  }
}

@media (max-width: 768px) {
  .more-task-container {
    grid-template-columns: 1fr; 
    width: 100%;
    padding: 2rem; 
  }
}

@media (max-width: 480px) {
  .more-task-heading {
    font-size: 1.6rem; 
  }
  
  .more-task-text {
    font-size: 1.2rem;
  }
  
  .more-task-para {
    font-size: 1rem; 
  }
}

/* more-task end here */


/* Integrations Marquee container start here */
.marquee {
  width: 100%;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
}

/* Marquee content */
.marquee-content {
  display: inline-block;
  animation: scroll 15s linear infinite;
}

/* Marquee images */
.marquee-content img {
  height: 100px;
  margin: 0 1rem; 
  vertical-align: middle; 
  transition: transform 0.3s ease;
}

.marquee-content img:hover {
  transform: scale(1.2);
}

/* Keyframes for scrolling */
@keyframes scroll {
  from {
    transform: translateX(100%);
  }
  to {
    transform: translateX(-100%);
  }
}

.Integrations-heading{
  padding: 3.75rem 6.25rem 0rem;
  text-align: center;
  justify-content: center;
  font-size: 2rem;
  font-family: ProximaNovaaltBold;
  color: #091c39;
}

.integrations-para
{
text-align: center;
justify-content: center;
font-family: ProximaNovaaltRegular;
font-size: 1.3rem;
padding: 2rem;
color: #666666;
}

/* Integrations Marquee container end here */

/*ready-to-start here*/

.ready-to-start{
  display: flex;
  padding: 3rem;
  flex-wrap: wrap;
  margin-top: 1rem;
  justify-content: space-evenly;
}
.ready-to-container{
  background-color: #e9f6f6;
  padding: 2rem;
  justify-content: center;
  align-items: center;
  text-align: center;
  border-radius: 25px;
}

.ready-to-container img{
  width: 5vw;
  border-radius: 20%;
}

.ready-to-text h5{
  align-items: center;
  font-size: 2rem;
  font-family: ProximaNovaaltBold;
  color: #091c39;
}
.ready-to-text p{
  font-size: 1.1rem;
  padding: 2rem;
  font-family: ProximaNovaaltRegular;
  color: #666666;
}
.ready-to-container button{
  margin-top: 1rem;
}

@media (max-width: 768px) {
  .ready-to-container {
   display: block;
   flex-direction: column;
  }

  .ready-to-container img{
    width: 25vw;
  }
}

/*ready-to-start end  here*/

/*updated design*/

.what-mkes-para{
  font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
  font-size: 1.2rem;
  text-align: center;
  color: #666;
}

/* Testimonials */
.testimonials {
  text-align: center;
  background: #f9f9f9;
  padding: 40px 20px;
}

.testimonial-card {
  display: inline-block;
  width: 280px;
  margin: 20px;
  padding: 20px;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.testimonial-card img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.testimonial-card blockquote {
  font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
  color: #555;
  margin: 10px 0;
}

.testimonial-card cite {
  display: block;
  margin-top: 10px;
  font-weight: bold;
  color: #0078D7;
}
.right-header{
  font-size: 1.2rem;
  line-height: 1.5;
  font-family: ProximaNovaaltBold;
  color: #091c39;
}
.right-para{
  font-family: ProximaNovaaltRegular, Helvetica, sans-serif;
}

.header-sapn{
  color: #e6638a;
}

/*how task tracker work */

/* Section Styling */
.how-it-works {
  padding: 3.75rem 6.25rem 0rem;
}

/* Heading Style */
.how-it-works-heading {
  text-align: center;
  font-size: 1.75rem;
  color: #091c39;
  font-family: ProximaNovaaltBold, monospace;
  margin-bottom: 2rem;
}

/* General styling for each step */
.how-it-works-step {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  margin-bottom: 3rem;
  align-items: center;
}



/* Image Styling */
.step-img {
  flex: 1;
  max-width: 40%;
}

.step-img img {
  max-width: 100%;
}

/* Text Styling */
.step-text {
  flex: 1;
  max-width: 100%;
}

.step-text h3 {
  font-size: 1.5rem;
  color: #091c39;
  margin-bottom: 1rem;
  font-family: ProximaNovaaltBold, monospace;
}

.step-text p {
  font-size: 1.2rem;
  color: #666666;
  line-height: 1.6;
  font-family: ProximaNovaaltRegular, sans-serif;
}

/* Responsive Layout for small screens */
@media (max-width: 768px) {
  .how-it-works-step {
      flex-direction: column;
      align-items: center;
  }
  .step-img, .step-text {
      max-width: 100%;
  }
  .step-text h3 {
      font-size: 1.4rem;
  }
  .step-text p {
      font-size: 1rem;
  }
}

/* For very small screens */
@media (max-width: 480px) {
  .how-it-works-heading {
      font-size: 1.6rem;
  }
  .step-text h3 {
      font-size: 1.2rem;
  }
  .step-text p {
      font-size: 0.9rem;
  }
  .step-img{
    max-width: 100%;
  }
}


.business-section{
  padding: 3.75rem 6.25rem 0rem;
}

/*ctc section*/
.ctc-container{
  display: flex;
  height: fit-content;
  justify-content: space-evenly;
  align-items: center;
  text-align: center;
  background-color: #f9f9f9;
  margin: 5.4rem;
  border-radius: 20px;
}
.ctc-left{
  width: 20%;
}
.ctc-left img{
  max-width: 20vw;
}
.ctc-heading{
  font-size: 2rem;
  font-family: ProximaNovaaltBold, monospace;
  color: #091c39;
  line-height: 2;
}
strong{
  color: #000;
}

/* ctc Responsive Layout for small screens */
@media (max-width: 768px) {
  .ctc-container {
      flex-direction: column;
      align-items: center;
      padding: 1rem;
      gap: 2rem;
  }
  .ctc-left img {
      max-width: 40vw;
  }
  .ctc-heading{
      font-size: 1.4rem;
  }
  .ctc-left {
      width: 100%;
  }
}

/* ctc For very small screens */
@media (max-width: 480px) {
  .ctc-container {
      flex-direction: column;
      align-items: center;
      justify-content: center;
  }
  .ctc-heading {
      font-size: 1rem;
  }
  .step-text p {
      font-size: 0.9rem;
  }
}

/*ctc end here*/
</style>

<!-- LANDING PAGE CSS END HERE ------------------------------------- -->





<!--Hero Section start here-->
    <section class="herosection">
<!--hero left side-->
        <div class="hero-left">
            <h1 class="header-heading"><span  class="header-sapn">Task Tracker</span> Ultimate Task Management Solution</h1>
            <span class="hero-sub-text">Efficient. Intuitive. Reliable.</span>
            <p class="hero-text">Welcome to Task Tracker, the comprehensive task management software built to simplify project workflows, track progress, and boost team productivity. Designed for businesses of all sizes, Task Tracker is your go-to task tracker for seamless task execution and efficient management.</p>
            <button class="hero-btn">Bottom Button</button>      
        </div>

        <!--hero right side-->

        <div class="hero-right">
            <img src="images/header-human-task-management.png.webp" alt="">
        </div>

    </section>

    <!--hero section end here-->

    <!--task section start here-->

    <section class="task-section">

            <!--task part-->
<div class="task">
    <div class="full-width">
        <h2 class="full-width-heading">Why Choose Task Tracker?</h2>
        <p class="full-width-para">Task Tracker is more than just a task management tool; it’s a solution that transforms the way your business operates. From small startups to large enterprises, Task Tracker offers a feature-rich, scalable platform that adapts to your specific needs.</p>
    </div>
    <div class="two-col">
        <div class="left">
            <img src="images/tasks.png.webp" alt="">
        </div>
        <div class="right">
            <ul>
                <li class="task-text"><strong>Streamlined Workflows:</strong> organize, delegate, and monitor tasks with ease.</li>
                <li class="task-text"><strong>Real-time Updates:</strong> Stay informed about task progress instantly.</li>
                <li class="task-text"><strong>Employee task management system:</strong> Empower teams with an efficient system for accountability.</li>
                <li class="task-text"><strong>Real-time Updates:</strong> Stay informed about task progress instantly.</li>
                <li class="task-text"><strong>Employee Productivity:</strong> Empower teams with an efficient employee task management system.</li>
            </ul>
        </div>
    </div>
</div>
</section>

  <!--task part end-->

<!--Key Features of Task Tracker card-->

 <!--task card-->
<div class="Key-features">
    <h2 class="kye-features-heading">Key Features of Task Tracker</h2>
 <div class="card-container">
    <div class="card">
        <div class="card-1-img"><img src="Images/tasks-card-1.png.webp" alt=""></div>
        <h3 class="card-1-heading">Comprehensive Task Management System</h3>
        <p class="card-1-para">Easily assign, organize, and track tasks in one centralized system. Use advanced features like customizable workflows, priority labels, and deadlines to maintain efficiency.</p>
       
    </div>
    <div class="card">
        <div class="card-1-img"><img src="Images/tasks-card-2.png.webp" alt=""></div>
        <h3 class="card-2-heading">Real-time Collaboration</h3>
      
        <p class="card-2-para">Faster collaboration with built-in communication tools. Allow teams to update task status, share insights, and align on goals without switching platforms.
        </p>
        
    </div>
    <div class="card">
        <div class="card-1-img"><img src="Images/tasks-card-3.png.webp" alt=""></div>
        <h3 class="card-3-heading">Integrations</h3>
        <p class="card-3-para">Task Tracker integrates seamlessly with platforms like WhatsApp, Slack, and email, ensuring streamlined communication and notifications.
        </p>
       
    </div>
  </div>
  </div>
  
  <!--kanban card end-->

<!--what makes better-->

<div class="what-makes-container">
    <h4 class="what-make-heading">
        Advanced Features That Set Task Tracker Apart
    </h4>
    <p class="what-makes-para">At Task Tracker, we’re committed to providing cutting-edge tools that make your task management seamless and efficient. Here’s a look at the advanced features designed to take your productivity to the next level:</p>

    
    </div>
</div>
<!--what makes end here-->
<section class="task-section">
<!--Attendance with Geofencing start here-->
<div class="task"> 
    <div class="full-width">
        <h2 class="full-width-heading">Attendance with Geofencing</h2>
        <p class="full-width-para">Say goodbye to outdated attendance systems! Task Tracker introduces Attendance with Geofencing, a feature that allows employees to mark their attendance directly from their mobile devices.</p>
    </div>
            <div class="two-col">
                <div class="left">
                    <img src="images/scrum.png.webp" alt="">
                </div>
                <div class="right">
                 <ul>
                    <li class="task-text"><strong>Real-time Location Capture:</strong> Punch in and out while the system records your precise location.</li>
                    <li class="task-text"><strong>Simplified Time Tracking: </strong> Managers can verify attendance accuracy without manual checks.</li>
                    <li class="task-text "><strong>Perfect for Remote Teams: </strong> Ensure accountability even for employees working off-site.</li>
                    <li class="task-text"><strong>Why It Matters: </strong> This feature eliminates the need for manual attendance sheets or biometric devices, ensuring accurate and hassle-free attendance management.</li>
                </ul>
                </div>
        </div>
        </div>
</div>
</div>
</section>


<section class="task-section">
    <!--Attendance with Geofencing start here-->
    <div class="task"> 
        <div class="full-width">
            <h2 class="full-width-heading">Predictive Tasking with AI/ML</h2>
            <p class="full-width-para">Stay ahead with the power of artificial intelligence and machine learning. Task Tracker leverages these technologies to offer predictive tasking, a feature that helps businesses plan smarter and work more efficiently.</p>
        </div>
                <div class="two-col">
                    <div class="left">
                        <img src="images/scrum.png.webp" alt="">
                    </div>
                    <div class="right">
                     <ul>
                        <li class="task-text"><strong>Smart Task Suggestions:</strong> Based on past behaviors, the system recommends tasks and timelines.</li>
                        <li class="task-text"><strong>Resource Optimization: </strong> AI predicts workload distribution, helping managers allocate resources effectively.</li>
                        <li class="task-text "><strong>Proactive Decision Making:  </strong> Gain insights into potential bottlenecks before they occur.
                            Why It Matters: Predictive tasking ensures you’re not just reacting to challenges but actively planning to overcome them.</li>
                    </ul>
                    </div>
            </div>
            </div>
    </div>
    </div>
    </section>


<!--Item List for Quick Notes start here-->
<section class="task-section">
    <div class="task"> 
        <div class="full-width">
            <h2 class="full-width-heading">Item List for Quick Notes</h2>
            <p class="full-width-para">Ever had an idea or a task you needed to jot down quickly? Task Tracker's Item List is your solution.</p>
        </div>
        <div class="two-col">
            <div class="left">
                <img src="images/scrum.png.webp" alt="">
            </div>
            <div class="right">
                <ul>
                    <li class="task-text"><strong> Note-Taking:</strong> Create a checklist of day-to-day tasks with ease.</li>
                    <li class="task-text"><strong> Assignment: </strong> Convert notes into tasks and assign them to team members instantly.</li>
                    <li class="task-text"><strong>Stay Organized:</strong> Avoid forgetting important to-dos by having everything in one place.</li>
                    <li class="task-text"><strong>Why It Matters: </strong> This feature ensures no task gets overlooked and makes delegation a breeze.</li>
                </ul>
            </div>
    </div>
    </div>
</section>

<!-- benefits start here-->
<section class="task-section">
    <div class="task"> 
        <div class="full-width">
            <h2 class="full-width-heading">Business Chat</h2>
            <p class="full-width-para">Communication is the backbone of successful collaboration, and Task Tracker simplifies it with an inbuilt Business Chat feature.</p>
        </div>
        <div class="two-col">
            <div class="left">
                <img src="images/scrum.png.webp" alt="">
            </div>
            <div class="right">
                <ul>
                    <li class="task-text"><strong>Seamless Team Communication:</strong> Chat directly within the platform to discuss tasks and projects.</li>
                    <li class="task-text"><strong>Task-centric Conversations: </strong> Link conversations to specific tasks for better context.</li>
                    <li class="task-text"><strong>Secure and Instant: </strong> Enjoy encrypted, real-time messaging without switching apps.</li>
                </ul>
            </div>
    </div>
    </div>
</section>

<div class="how-it-works">
    <h3 class="how-it-works-heading">How Task Tracker Works</h3>

    <!-- Step 1 -->
    <div class="how-it-works-step">
        <div class="step-img">
            <img src="images/scrum-card-1.png.webp" alt="Step 1">
        </div>
        <div class="step-text">
            <h3 class="step-heading">Step 1: Sign Up and Set Up</h3>
            <p class="step-description">Sign up at Task Tracker and customize your workspace. Add team members, define roles, and start building projects.</p>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="how-it-works-step reverse">
        <div class="step-text">
            <h3 class="step-heading">Step 2: Assign and Manage Tasks</h3>
            <p class="step-description">Create tasks, set deadlines, and assign team members. Use categories and tags for better organization.</p>
        </div>
        <div class="step-img">
            <img src="images/scrum-card-2.png.webp" alt="Step 2">
        </div>
    </div>

    <!-- Step 3 -->
    <div class="how-it-works-step">
        <div class="step-img">
            <img src="images/scrum-card-3.png.webp" alt="Step 3">
        </div>
        <div class="step-text">
            <h3 class="step-heading">Step 3: Track Progress in Real-Time</h3>
            <p class="step-description">Monitor task updates and performance using the intuitive dashboard. Visualize progress through charts and reports.</p>
        </div>
    </div>

    <!-- Step 4 -->
    <div class="how-it-works-step reverse">
        <div class="step-text">
            <h3 class="step-heading">Step 4: Generate Reports</h3>
            <p class="step-description">Utilize analytics to identify trends, track productivity, and ensure your team meets its goals.</p>
        </div>
        <div class="step-img">
            <img src="images/kanban-board-card-2.png.webp" alt="Step 4">
        </div>
    </div>
</div>


<!--ctc section-->
    <div class="ctc-container">
    <div class="ctc-right">
     <h3 class="ctc-heading">Ready to Transform Your Workflow?</h3>
     <button class="hero-btn">Sign up</button>
    </div>
    <div class="ctc-left">
        <img src="images/m-right-2.png.webp" alt="">
    </div>
</div>

    <!--business  end here-->

<!--more task start here-->
    <h4 class="more-task-heading">More than just task management</h4>
        <p class="more-task-para">Explore the full potential and amazing capabilities of Bitrix24.</p>
        <!--more task grid-->
        <div class="more-task-container">
            <a href="#" class="more-task-itme" style="background-color: #f8f8f8;">
            <h5 class="more-task-text"> Project management</h5>
            <img src="Images/tools-project-management.png.webp" alt="">
            </a>
            <a href="#" class="more-task-itme" style="background-color: #f2f9ff;">
                <h5 class="more-task-text">Project collaboration</h5>
               <img src="Images/tools-project-collaboration.png.webp" alt="">
            </a>

            <a href="#" class="more-task-itme" style="background-color: #f8f8f8;">
                <h5 class="more-task-text"> Task tracking</h5>
                <img src="Images/tools-task-tracking.png.webp" alt="">
            </a>

            <a href="#" class="more-task-itme" style="background-color: #f2f9ff;">
                <h5 class="more-task-text"> Employee performance</h5>
                <img src="Images/tools-employee-efficiency.png.webp" alt="">
            </a>

            <a href="#" class="more-task-itme" style="background-color: #f8f8f8;">
                <h5 class="more-task-text">Automation</h5>
                <img src="Images/tools-task-automation.png.webp" alt="">
            </a>

            <a href="#" class="more-task-itme"><h5 class="more-task-text"> API & integrations</h5>
                <img src="Images/tools-mobile-task.png.webp" alt="">
            </a>
          </div>          
    </div>

    <!--task section end here here-->
    
    <!--Integrations section start here-->

    <section class="Integrations">

        <h4 class="Integrations-heading">Industries That Trust Task Tracker</h4>
        <p class="integrations-para">Task Tracker is tailored for various sectors, including:</p>
    <div class="marquee">
        <div class="marquee-content">
          <img src="images/anadee.webp" alt="Image 1">
          <img src="images/apartmenttimes.webp" alt="Image 2">
          <img src="images/archita_essentials.webp" alt="Image 3">
          <img src="images/coredecor.webp" alt="Image 4">
          <img src="images/hpie.webp" alt="Image 5">
          <img src="images/sandeepinfra.webp" alt="Image 1">
          <img src="images/scroll img.webp" alt="Image 2">
          <img src="images/nirmalvasundhara.webp" alt="Image 3">
          <img src="images/mirus.webp" alt="Image 4">
          <img src="images/vkn.webp" alt="Image 5">
        </div>
      </div>
    </section>
    <!--Integrations section end here-->

    <!--testimonials start here-->
    <section class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial-card">
            <img src="images/testimonial1.jpg" alt="Alex">
            <blockquote>
                <p>"Task Tracker has revolutionized our business operations. The time tracking and reporting features have significantly improved our project delivery timelines."</p>
                <cite>- Alex, Project Manager</cite>
            </blockquote>
        </div>
        <div class="testimonial-card">
            <img src="images/testimonial2.jpg" alt="Priya">
            <blockquote>
                <p>"Thanks to Task Tracker, we can monitor remote teams in real time. It's the best task management software we've used."</p>
                <cite>- Priya, Operations Head</cite>
            </blockquote>
        </div>
        <div class="testimonial-card">
            <img src="images/testimonial3.jpg" alt="Ravi">
            <blockquote>
                <p>"The integrations with WhatsApp and Slack are game-changers for our team. Highly recommend Task Tracker!"</p>
                <cite>- Ravi, Team Lead</cite>
            </blockquote>
        </div>
    </section>

    <!--testimonials end here-->

    <!--ready to start start here-->
    <section class="ready-to-start">
        <div class="ready-to-container">
                <img src="images/arrow.webp" alt="">
            <div class="ready-to-text">
                <h5>Ready to Transform Your Workflow?</h5>
                <p>Join thousands of satisfied businesses using Task Tracker for their task management needs. Sign up for free today and experience the best task management app in action.</p>
                <button class="hero-btn">Bottom Button</button>  
            </div>
        </div>
    </section>

    <!--ready to start end here-->

    <!--Integrations section end here-->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>