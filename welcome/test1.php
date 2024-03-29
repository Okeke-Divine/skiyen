<link rel="stylesheet" type="text/css" href="/font/css/all.css">
<script type="text/javascript" src="/js/jquery.js"></script>
<!--It's just a concept, a chat UI design for direct messaging!
Enjoy! :) Don't forget to click the heart if you like it! -->

<div class="container">
  <div class="chatbox">
    <div class="top-bar">
      <div class="avatar"><p>V</p></div>
      <div class="name">Voldemort</div>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-video"></i>
      </div>
      <div class="menu">
        <div class="dots"></div>
      </div>
    </div>
    <div class="middle">
      <div class="voldemort">
        <div class="incoming">
          <div class="bubble">Hey, Father's Day is coming up..</div>
          <div class="bubble">What are you getting.. Oh, oops sorry dude.</div>
        </div>
        <div class="outgoing">
          <div class="bubble lower">Nah, it's cool.</div>
          <div class="bubble">Well you should get your Dad a cologne. Here smell it. Oh wait! ...</div>
        </div>
        <div class="typing">
          <div class="bubble">
            <div class="ellipsis one"></div>
            <div class="ellipsis two"></div>
            <div class="ellipsis three"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-bar">
      <div class="chat">
        <input type="text" placeholder="Type a message..." />
        <button type="submit"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
  <div class="messages"></div>
  <div class="profile">
    <div class="avatar"><p>H</p></div>
    <div class="name2">Harry<p class="email">Harry@potter.com</p></div>
  </div>
  <ul class="people">
    <li class="person focus">
      <span class="title">Voldemort </span>
      <span class="time">2:50pm</span><br>
      <span class="preview">What are you getting... Oh, oops...</span>
    </li>
     <li class="person">
      <span class="title">Ron</span>
      <span class="time">2:25pm</span><br>
      <span class="preview">Meet me at Hogsmeade and bring...</span>
    </li>
    <li class="person">
      <span class="title">Hermione</span>
      <span class="time">2:12pm</span><br>
      <span class="preview">Have you and Ron done your hom...</span>
    </li>
  </ul>
</div>

<footer>
  <p>made by <a href="https://codepen.io/juliepark"> julie</a> ♡
</footer>

<style type="text/css">
@import url("https://fonts.googleapis.com/css?family=Lato:400,700");

/*$font: "Lato", sans-serif;

$primary: #79c7c5;
$secondary: #a1e2d9;
$white: #f9fbff;
$dark: #777777;
*/
html {
  display: grid;
  min-height: 100%;
}

body {
  display: grid;
  background: linear-gradient(to bottom left, #79c7c5 40%, #f9fbff 100%);
  font-family: "Lato", sans-serif;
}

.container {
  position: relative;
  margin: 12% auto;
  width: 620px;
  height: 450px;
}

.messages {
  position: absolute;
  background: #f9fbff;
  opacity: 0.5;
  width: 30%;
  height: 70%;
  top: 2.5%;
  left: 5%;
  border-radius: 10px 0 0 10px;
  box-shadow: -5px 5px 10px rgba(#777777, 0.5);
}

/*chat messages */
.people {
  position: absolute;
  list-style-type: none;
  width: 30.2%;
  left: -10px;
  top: 24.7%;
  line-height: 0.7em;
}
 .people .title {
    text-transform: uppercase;
    font-size: 0.7em;
    margin-left: 14px;
    letter-spacing: 1px;
    color: #777777;
  }
  .people .time {
    font-size: 0.3em;
    color: #777777;
    position: absolute;
    right: 10px;
    margin-top: 2px;
  }
  .people .preview {
    color: #79c7c5;
    margin-left: 14px;
    font-size: 0.5em;
  }

.person {
  padding: 12px 0 12px 12px;
  border-bottom: 1px solid #79c7c5;
  cursor: pointer;
}  .person:hover {
    background: #f9fbff;
    transition: all 0.3s ease-in-out;
  }

.focus {
  background: #f9fbff;
  margin-left: 1px;
}

.profile {
  position: absolute;
  left: 16%;
  top: 7%;
}

.name2 {
  position: absolute;
  top: 50px;
  left: 2px;
  text-transform: uppercase;
  color: #79c7c5;
  font-size: 0.8em;
  letter-spacing: 2px;
  font-weight: 500;
}
.email {
  color: #f9fbff;
  font-size: 0.5em;
  margin-left: -30px;
  margin-top: 2px;
}

.chatbox {
  position: absolute;
  left: 35%;
  height: 75%;
  width: 60%;
  border-radius: 10px;
  box-shadow: 5px 5px 15px rgba(#777777, 0.5);
}

.top-bar {
  width: 100%;
  height: 60px;
  background: #f9fbff;
  border-radius: 10px 10px 0 0;
}

.avatar {
  width: 35px;
  height: 35px;
  background: linear-gradient(to bottom left, #79c7c5 20%, #a1e2d9 100%);
  border-radius: 50%;
  position: absolute;
  top: 11px;
  left: 15px;
}

.avatar   p {
    color: #f9fbff;
    margin: 7px 12px;
  }

.name {
  position: absolute;
  top: 22px;
  text-transform: uppercase;
  color: #777777;
  font-size: 0.8em;
  letter-spacing: 2px;
  font-weight: 500;
  left: 60px;
}

.menu {
  position: absolute;
  right: 10px;
  top: 20px;
  width: 10px;
  height: 20px;
  cursor: pointer;
}
.menu:hover {
    transform: scale(1.1);
    transition: all 0.3s ease-in;
  }

.icons {
  position: absolute;
  color: #a1e2d9;
  padding: 10px;
  top: 5px;
  right: 21px;
  cursor: pointer;
}
.icons .fas {
    padding: 5px;
    opacity: 0.8;
}
.icons .fas:hover {
      transform: scale(1.1);
      transition: all 0.3s ease-in;
    }

.dots {
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background-color: #79c7c5;
  box-shadow: 0px 7px 0px #79c7c5, 0px 14px 0px #79c7c5;
}

.middle {
  position: absolute;
  background: #f9fbff;
  width: 100%;
  opacity: 0.85;
  top: 60px;
  height: 80%;
}

.incoming {
  position: absolute;
  width: 50%;
  height: 100%;
  padding: 20px;
}
.incoming   .bubble {
    background: lighten(#777777, 23%);
  }

.typing {
  position: absolute;
  top: 67%;
  left: 20px;
}
.typing   .bubble {
    background: lighten(#777777, 45%);
    padding: 8px 13px 9px 13px;
  }

.ellipsis {
  width: 5px;
  height: 5px;
  display: inline-block;
  background: lighten(#777777, 25%);
  border-radius: 50%;
  animation: bounce 1.3s linear infinite;
}

.one {
  animation-delay: 0.6s;
}
.two {
  animation-delay: 0.5s;
}
.three {
  animation-delay: 0.8s;
}

.bubble {
  position: relative;
  display: inline-block;
  margin-bottom: 5px;
  color: #f9fbff;
  font-size: 0.7em;
  padding: 10px 10px 10px 12px;
  border-radius: 20px;
}

.lower {
  margin-top: 45px;
}

.outgoing {
  position: absolute;
  padding: 20px;
  right: 0;
  top: 15%;
  width: 50%;
  height: 100%;
}
  .outgoing .bubble {
    background: #79c7c5;
    float: right;
  }

.bottom-bar {
  position: absolute;
  width: 100%;
  height: 55px;
  bottom: 0;
  background: #f9fbff;
  border-radius: 0 0 10px 10px;
}

.left {
  left: 0px;
}

input {
  padding: 7px;
  width: 74%;
  left: 5%;
  position: absolute;
  border: 0;
  top: 13px;
  background:#f9fbff;
  color: #79c7c5;
}

input::placeholder {
  color: #a1e2d9;
}

input:focus {
  color: #777777;
  outline: 0;
}

button {
  position: absolute;
  border: 0;
  font-size: 1em;
  color: #a1e2d9;
  top: 19px;
  opacity: 0.8;
  right: 17px;
  background: transparent;
  cursor: pointer;
  outline: 0;
}
button:hover {
    transform: scale(1.1);
    transition: all 0.3s ease-in-out;
    color: #79c7c5;
  }

footer {
  position: absolute;
  bottom: 0;
  right: 0;
  text-align: center;
  font-size: 0.7em;
  padding: 10px;
}
footer p {
    color: #79c7c5;
    text-transform: uppercase;
    letter-spacing: 2px;
  }
  footer a {
    color: #f9fbff;
    text-decoration: none;
  }
      footer a:hover {
      color: #a1e2d9;
    }

@keyframes bounce {
  30% {
    transform: translateY(-2px);
  }
  60% {
    transform: translateY(0px);
  }
  80% {
    transform: translateY(2px);
  }
  100% {
    transform: translateY(0px);
    opacity: 0.5;
  }
}

</style>
<script type="text/javascript">
   $(".person").on('click', function(){
    $(this).toggleClass('focus').siblings().removeClass('focus');
 })
</script>