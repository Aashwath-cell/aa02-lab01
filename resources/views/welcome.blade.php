<!DOCTYPE html>
<html lang="en">
<head>
    <style>
header
{
  font-size: xx-large;
  font-weight: 400;
  text-align: center;
  font-style: oblique;
  text-shadow: 2px 2px 5px rgba(65, 34, 34, 0.3);
  color: white;
  padding: 20px;
}

.navbar
{
  background-color: #008080; 
  border-radius: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}

.navbar-container
{
  display: flex;
  justify-content: center;
  padding: 10px;
}

.navbar ul 
{
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.navbar li
{
  margin: 0 15px;
  font-size: larger;
  font-weight: bold;
}

.navbar a
{
  text-decoration: none;
  color: white;
  padding: 10px 20px;
  transition: background-color 0.3s, color 0.3s;
}

.navbar a:hover
{
  background-color: #005959; 
  color: #ffffff;
}

.top
{
  background-image: url("https://wallpapercave.com/wp/wp6681951.jpg");
  background-repeat: repeat-x;
  background-attachment: scroll;
}

.sidebar
{
  color: aliceblue;
  border: 2px dotted;
  text-align: justify;
  position: relative;
  margin-right: 40%;
  padding-right: 10px;
  padding-left: 30px;
  margin-left: -20px;
  margin-top: 5px;
  background-color:rgba(102, 94, 94, 0.5);
}

#news
{
  text-align: center;
}
.reg
{
  background-image: url('https://wallpaperaccess.com/full/3074652.jpg');
  object-fit: cover;
}
form 
 {
  margin-top:10px;
  margin-bottom:10px;
 margin-left:20%;
 margin-right:30%;
 padding-left:20px;
 border:double;
 position: relative;
 background-image:url('http://1.bp.blogspot.com/-mJpKSDcsk8M/T7GbxfuI9fI/AAAAAAAAArU/GeaX_SbKMpo/s1600/paper-background.jpg');
}
#name,#email,#mobile,#dob,#service
{
  width:90%;
padding:10px;
}
#submit,#reset
{
  margin-left:5%;
  margin-bottom:5px;
  margin-top:20px;
  padding:10px;
}
footer
{
  text-align: center;
  color: white;
  padding: 10px;
  background-color: #333;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
</head>
<body>
  <div class="top">
  <header>
    <h1>Ekdant Hospitals</h1>
  </header>  
  <nav class="navbar">
    <div class="navbar-container">
    <ul>
      <li><a href="#">HOME</a></li>
      <li><a href="about_us.html">ABOUT US</a></li>
      <li><a href="services.html">SERVICES</a></li>
      <li><a href="doctors.html">DOCTORS</a></li>
    </ul>
    </div>
  </nav>
    <aside class="sidebar">
      <div>
    <p id="news"><i>ADVANCEMENTS IN MEDICAL SCIENCE</i></p>
      <p>  1] <b>Breakthrough MRI Technology:</b> Researchers at Northeastern University have developed a new MRI technology that significantly improves early disease detection. This innovative quantum-based MRI provides higher quality images, offering radiologists better data to diagnose conditions early and tailor treatments more precisely <a href="https://news.northeastern.edu/2024/05/03/disease-detection-mri-technology/" >Read more</a></p><br>
      <p>  2] <b>Mediterranean Diet:</b> Studies continue to show a link between following a Mediterranean diet and a lower risk of mortality for women <a href="https://www.cnn.com/2023/03/14/health/mediterranean-diet-women-heart-wellness/index.html">Read more</a></p><br>
      <p>  3] <b>Sleep Apnea:</b> A new drug offers hope for treating sleep apnea without the need for a CPAP machine (continuous positive airway pressure) <a href="https://www.yahoo.com/news/revolutionary-drug-sleep-apnea-could-190019718.html">Read more</a></p><br>
      <p>  4] <b>Advancements in Cancer Treatment:</b> Researchers have developed a promising new immunotherapy treatment that targets specific cancer cells while minimizing damage to healthy tissue. Clinical trials show encouraging results in various types of cancer. <a href="https://www.cancer.org/">Read more</a></p><br> 
    </div>
    </aside>
  </div>
  <div class=""image>

  </div>
  <div class="reg">
    <form action="success.html" method="get">
      <div>
            <legend style = "text-align:center;color: #ffffff;font-size:30px;" >ENROLL NOW !! </legend>
            <label for="name">
              <br>Name:-
            <input type="text" name="name" id="name" placeholder="Your Name" required > 
          </label>
        </div>
        <div>
          <label for="email">
            <br>Email:-
          <input type="email" name="email" id="email" placeholder="Your Email"> 
        </label>
      </div>
      <div>
          <label for="mobile">
            <br>Mobile Number:-
          <input type="number" name="mobile" id="mobile" placeholder="Your Mobile Number" requiured> 
          </label>
        </div>
      <div>        
          <label for="dob">
            <br>Date Of Birth:-
          <input type="date" name="dob" id="dob" placeholder="Your Date Of Birth" required > 
        </label>
      </div>
      <div>
        <label for="service">
          <br>Type of service requested:-
          <select id="service" name="service" required >
            <option value="emergency_care">Emergency Care</option>
            <option value="surgery">Surgery</option>
            <option value="maternity">Maternity</option>
            <option value="pediatrics">Pediatrics</option>
            <option value="cardiology">Cardiology</option>
            <option value="general_consultation">General Consultation</option>
        </select>
        </label>
      </div>
    <div>
      <br>Any message:-
        <label for="message">
          <br>
          <textarea rows="3" cols="79" placeholder="Message "></textarea>
        </label>
      </div>
        <input type="submit" id="submit" value="Submit"><input type="reset" id="reset" value="Reset">
      </div>    
    </form>
    <footer>
      <p>&copy; 2024 Ekdant Hospitals. All rights reserved.</p>
    </footer>
</body>
</html>
