<?php
session_start();
session_unset();
session_destroy();

Echo "<script>window.location.href='http://localhost/NFT';</script>";
?>