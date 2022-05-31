<?php require '../Templates/header.php'?>


    <div class="middle-container">
    <!--Big image-->
    <div class="imgContainer">
        <div class="img">
            <img id="imgSize" src="img/ProfileImg.jpeg" alt="Image showing products">
        </div>
    </div>
    <!--Message-->
    <div class="message">
        <h1 id="aboutHeading">About me</h1>
        <p> I am <span id="nameStyle"><b>Oisin Egan</b></span> and I am  21 years old. I study BSc (Hons) Computing in the Technological University Dublin (Course code: Tu860). I am progressing into my third year of studies. Over the first two years of studying computing I have achieved a 3.5 gpa or more each year.
            <br><br>
            I enjoy programming, problem solving and learning new things. I am interested in both front end and backend technologies including but not limited to Java, PHP and C#.  </p>
        <br><br>
            and so on
    </div>
    <!--Links to different pages-->
    <div class="grid-inner-container">
        <div class="link1"><br><br>
            <div class="imageBackground1"> <img id="icon1" src="img/codeIconWhite.png" alt="Skills" height="60" width="60"></div>
            <h2 class="colHeading">Skills</h2>
            <p>To date, with the aid of college and self learning I have developed skills in different areas of IT including front end, back end, networking and operating systems which including:
                <br>
            </p>

            <ul class="list1">

                <li>Java</li>
                <li>PHP</li>
                <li>Javascript</li>
                <li>C#</li>
                <li>SQL</li>
                <li>Html/css</li>
                <li>JQuery</li>
                <li>Java Swing</li>
                <li>Unity</li>
                <li>Networking</li>
                <li>and more..</li>
            </ul>

        </div>
        <!--<div class="link2"><br><br>
            <img class="icons" src="images/findUsIcon.png" alt="Frameworks">
            <p>We have numerous stores nation wide. Directions on how to find us can be found by clicking the link.</p>
            <label class="labelLinks">We have stores located in:</label>
            <ul>
                <li>Dublin</li>
                <li>Cork</li>
                <li>Galway</li>
            </ul>
            <a href="findus.html"><input class="buttons" type="button" value="Find us!"></a>
        </div> -->
        <div class="link3"><br><br>
            <div class="imageBackground2"><img id="icon2" src="img/collegeIconWhite.png" alt="Notable College modules" height="80" width="80"></div>
            <h2 class="colHeading">College modules</h2>
            <p>From my first two years of studying computing. I have completed multiple modules that will beneficial towards my future career including: <br><br> </p>
            <ul class="list1">
                <li>Object-Oriented Analysis and Design</li>
                <li>Software Engineering and Testing</li>
                <li>Web development</li>
                <li>Advanced programming</li>
                <li>Database Fundamentals</li>
                <li>Interactive multimedia</li>
                <li>Networking</li>
                <li>Operating systems</li>
            </ul>

            <p id="line1">Click below to find out more about key things that each module has thought me. <br></p>
            <!-- Button trigger modal -->
            <button type="button" class="buttonStyle" data-toggle="modal" data-target="#exampleModalLong">
                My knowledge
            </button>

        </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Object-Oriented Analysis and Design</h5>
                    Throughout this module, I designed <b>class diagrams</b> and <b>use-case diagrams</b>. As part of a team we designed class diagrams and use-case diagrams for an online gym system. Then created the system using <b>php</b>.

                    <br><br>
                    <h5>Software engineering and testing</h5>
                    Software engineering and testing was focused on the <b>software development life cycle</b>. I also learned more about <b>Agile methodology</b>. As a team, we worked on an online-ecommerce store and had <b>weekly scrum meetings</b>. We completed proposals, requirements documents and UML diagrams and developed <b>use-case specs</b> for each use case. We then coded the ecommerce store using <b>html, css, bootstrap, php </b>and <b>SQL</b>. We also tested the project with <b>unit testing, validation testing and user interface testing </b> and more.

                    <br><br>
                    <h5>Web development</h5>
                    Web development has been over 3 modules. Throughout web development I focused on <b>client-side </b> and <b>server-side</b>. With the client-side module, I used technologies to aid me to build a responsive site such as html, css, <b>javascript</b> and <b>JQuery</b>. In server-side I learned how to connect a site to a <b>database</b> using <b>pdo's</b> along with learning about <b>MVCs</b> and <b>Automated testing</b>.

                    <br><br>
                    <h5>Advanced programming</h5>
                    In advanced programming, I learnt and completed weekly exercises on the complex side of <b>java</b> including <b>Threads, Recursion, Internationalization,OOP, Reflection, Generics </b> and <b>Lambdas</b>.

                    <br><br>
                    <h5>Database fundamentals</h5>
                    In database fundamentals, I focused on <b>designing databases</b> and learning more about the <b>SQL</b> language to manipulate database entries.

                    <br><br>
                    <h5>Interactive MultiMedia</h5>
                    In this module, I worked as part of a team to develop a game using <b>unity</b> and <b>C#</b>. The game was a mix of a first-person zombie survival and escape rooms. Throughout this module I learned a lot including the importance of <b>version control</b> and <b>game design</b>.

                    <br><br>
                    <h5>Networking</h5>
                    Networking has been over 4 modules to date. Throughout networking I have gained knowledge in multiple aspects of networking including <b>LAN</b> and <b>WAN switching and routing</b> as well as <b>troubleshooting enterprise networks</b>. I also have learned more and how to implement networking techniques including <b>STP, standard/extends ACLs, configuring NAT services to provide scalability</b> and more.

                    <br><br>
                    <h5>Operating systems</h5>
                    This module has been a follow on from previous modules which included learning about <b>computer hardware</b> and <b>hardware operations</b>. In operating systems I gained more knowledge about <b>Threads, process synchronisation, thread structures and scheduling</b>. I also <b>researched</b> how <b>Mutex locks</b> solves the <b>Dining Philososphers Problem</b> along with the advantages and disadvantages of the solution.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>






    </div>
    </div>




<?php require '../Templates/footer.php'?>