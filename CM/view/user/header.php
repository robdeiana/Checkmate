<div class="wrapper col1">
    <div id="header">
        <div class="fl_left">
          <h1><a href="./index.php?page=home">Checkmate</a></h1>
          <div id="login">
              <ul list-style="none">
                <li class="last">
                    <a href="./index.php?page=logout">Logout</a>
                </li>
                <li>
                    <a href="#"><?php echo (isset($_SESSION['username']) ? ($_SESSION['username']) : false) ?></a>
                </li>
              </ul>
          </div>
        </div>
        <div id="topnav">
          <ul>
                <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'market') ? 'class="last active"' : 'class="last"'; ?>><a href="./index.php?page=market">Market</a></li>
                <li><a href="#">Friends</a>
                  <ul>
                        <li><a href="https://www.youtube.com/user/TheDaviddol" target="_blank">Chess Channel</a></li>
                        <li><a href="http://www.chess.com/" target="_blank">Play Chess</a></li>
                        <li><a href="http://www.equine.com/" target="_blank">Buy Horses</a></li>
                  </ul>
                </li>
                <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'how') ? 'class="active"' : false; ?>><a href="./index.php?page=how">How to buy</a></li>
                <li <?php echo (isset($_GET['page']) && $_GET['page'] == 'about') ? 'class="active"' : false; ?>><a href="./index.php?page=about">About</a></li>
                <li <?php echo ((isset($_GET['page']) && $_GET['page'] == 'home') || empty($_GET)) ? 'class="active"' : false; ?>><a href="./index.php?page=home">Homepage</a></li>
          </ul>
        </div>
        <br class="clear" />
    </div>
</div>