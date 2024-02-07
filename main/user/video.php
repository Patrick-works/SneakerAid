<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../css/video.css" />
    <title>Contact Us</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      
      body {
        background-image:url("../../assets/img/leb.jpg"); /* Set background color to black */
      }
      
      #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-height: 100%;
        min-width: 100%;
      }
      
      .container {
        position: fixed;
        width: 400px;
        height: 450px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        border-radius: 10px;
        backdrop-filter: blur(15px);
        border: 2px solid rgba(255, 255, 255, 0.5);
      }
      
      h2 {
        font-size: 30px;
        color: #fff;
        text-align: center;
      }
      
      .input-box {
        position: relative;
        width: 100%;
        margin: 30px 0;
        border-bottom: 2px solid #fff;
      }
      
      .input-box label {
        position: absolute;
        color: #fff;
        top: 50%;
        left: 5px;
        font-size: 17px;
        pointer-events: none;
        transition: 0.3s;
      }
      
      .input-box textarea,
      .input-box input {
        width: 100%;
        height: 50px;
        background-color: transparent;
        border: none;
        font-size: 17px;
        color: #fff;
        outline: none;
      }
      
      .input-box textarea {
        padding: 15px 0;
        resize: none;
      }
      
      .input-box textarea:focus ~ label,
      .input-box textarea:valid ~ label,
      .input-box input:valid ~ label,
      .input-box input:focus ~ label {
        top: -15px;
      }
      
      .btn {
        width: 100%;
        height: 40px;
        color: #fff;
        border: none;
        outline: none;
        border-radius: 50px;
        cursor: pointer;
        font-size: 17px;
        font-weight: 500;
        background-color: #007984;
      }
    </style>
  </head>
  <body>
   <!-- <video autoplay muted loop id="myVideo">
      <source src="../../assets/img/stock-footage-worker-cleaning-sneakers-with-brush-and-professional-cleaning-stuff-in-shoes-workshop-sneaker.webm" type="video/webm" />
    </video>-->

    <form
      class="container"    action="https://formspree.io/f/xpzvpknp"
  method="POST"
    >
      <h2>Request A Video!</h2>
      <div class="input-box">
        <input type="text" name="Username" required />
        <label for="">Name</label>
      </div>

      <div class="input-box">
        <input type="email" name="Email" required />
        <label for="">Email</label>
      </div>

      <div class="input-box">
        <textarea name="Message" required></textarea>
        <label for="">Message</label>
      </div>

      <button class="btn">Send</button>
    </form>
  </body>
</html>
