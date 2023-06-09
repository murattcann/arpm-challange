<h2>Cases</h2>

<ul>
    <li>
        <a href="#introduction">Introduction</a>
        <a href="#introduction">Introduction</a>
        <ul><li><a href="#project-structure">MVC Project Structure</a></li></ul> 
    </li>
    <li><a href="#installation">Installation</a></li>
</ul>

 
 <div id="project-structure">
     <h2>MVC Project Structure</h2>
     <ul>
        <li>
            src => Application operations folder
            <ul>
                <li>Controllers
                    <ul>
                        <li>HomeController.php</li>
                    </ul>
                </li>
                <li>Exceptions
                  <ul>
                      <li>ControllerNotFoundException.php</li>
                    <li>RouteNotFoundException.php</li>
                    <li>ViewNotFoundException.php</li>
                  </ul>
                </li>
                <li>Models</li>
                <li>Views  
                    <ul>
                        <li>view.php => for controller methods</li>
                        <li>exception.php for exception message</li>
                    </ul>
                </li>
                <li>routes.php => All application routes</li>
                <li>index.php => projects base file</li>
            </ul>
        </li>
     </ul>
 </div>

<div id="installation">
    <h2>Installation</h2>
    <ul>
        <li>PHP8+ required</li>
        <li>clone this repo to your environment</li>
        <li>run <code>composer install</code> command to setup project</li>
        <li>Go to projects document root (index.php in base path) on browser after start your web server </li> 
        <li>Go to /home, /folder1 or /folder2 routes to test</li>
    </ul>
</div>
