<?php
session_start();
// destorying sessions
unset($_SESSION['name']); // this will remove page 3 email froms howing
session_destroy() ;// this will destory the session all at once