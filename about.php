<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

</head>
<style>
    /* Styles for the 'about' section */
.about {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 20px;
}

/* Styles for the image */
.img {
  width: 620px;
  height: 350px;
  margin-left: 20px;

}

/* Styles for the text */
.text {
  font-size: 20px;
  line-height: 2.5;
  margin-left: 25px;
  text-align: center;
  background-color: whitesmoke;
  font-weight: bold;
}
/* Add background color to the section */
.page-section {
  background-color: #f8f9fa;
}

/* Center align the section heading and subheading */
.section-heading, .section-subheading {
  text-align: center;
}

/* Style the timeline */
.timeline {
  padding: 0;
  list-style: none;
}

/* Style the timeline events */
.timeline li {
  position: relative;
  padding: 50px 0;
}

/* Style the timeline images */
.timeline-image {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: inline-block;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
}

/* Style the timeline headings */
.timeline-heading h4 {
  margin: 20px 0 0;
  font-size: 20px;
}

/* Style the timeline bodies */
.timeline-body p {
  margin: 20px 0;
  font-size: 16px;
}

/* Style the call-to-action timeline event */
.timeline-inverted .timeline-image h4 {
  margin: 0;
  font-size: 18px;
  text-align: center;
}

/* Style the call-to-action timeline event background color */
.timeline-inverted .timeline-image {
  background-color: #f8f9fa;
}

/* Style the timeline connectors */
.timeline:before {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  width: 2px;
  background-color: #007bff;
  left: 50%;
  margin-left: -1px;
}

/* Style the timeline connector arrows */
.timeline li:before {
  content: '';
  position: absolute;
  top: 30px;
  left: 50%;
  transform: translateX(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-right: 10px solid #007bff;
}

/* Style the inverted timeline connector arrows */
.timeline li.timeline-inverted:before {
  left: auto;
  right: 50%;
  transform: translateX(50%);
  border-right: 0;
  border-left: 10px solid #007bff;
}

/* Add some spacing between timeline events */
.timeline li:not(:last-child) {
  margin-bottom: 100px;
}


</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-2" >
        <a class="navbar-brand" style="font-size: 30px;" href="#">QuickFix</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item active">
              <a class="nav-link" style="font-size: 20px;" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="font-size: 20px;" href="service.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"style="font-size: 20px;" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="font-size: 20px;"href="feedback.php">Feedback</a>
              </li>
              
              <li class="nav-item">
                <a class="btn btn-danger ml-2"style="font-size: 20px;" href="form/rform.php">Signup</a>
              </li>
              
              <li class="nav-item">
                <a class="btn btn-success ml-2"style="font-size: 20px;" href="form/login.php">Login</a>
              </li>
          </ul>
         
        </div>
    </nav>
    <div class="jumbotron">
  <h1>WELCOME TO QuickFix</h1>
  <p>"Customer Happiness Is Our Aim"</p>
</div>
<div class="about">
    <div>
    <img class="img" src="img/about.jpeg" alt="">
    </div>
    <div>
        <p class="text" >
            We are providing 7 days free repairing mantainance charge .
            It is only for the 7 Days when you will request for repairing
            the damage prouducts. We are only providing the charges of
            mechanics that to only for 7 days of your Regestriation.

            If tou will be our regular customer than you will be our 
            regular customer and the charges will be less more than 
            others............

        </p>
    </div>
</div>
