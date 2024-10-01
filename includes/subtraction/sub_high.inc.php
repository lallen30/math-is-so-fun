<?php $low = $_GET['low']; ?>
<h1><span style="color:#F93">You choose <?=$low?> for your low number.</span>
<h1>Now choose your highest number to subtraction with:</h1>

<div class="border-shadow alignleft">
    <div style="float:left;"><figure><img src="images/numbers/gray/1.jpg" alt="" height="180" width="135"></figure></div>
 <?php if($low < 2){ ?>
   <div style="float:left; margin-left:4px;"><figure><a href="?high=2&low=<?=$low?>"><img src="images/numbers/2.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
   <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/2.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
<?php if($low < 3){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=3&low=<?=$low?>"><img src="images/numbers/3.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/3.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
<?php if($low < 4){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=4&low=<?=$low?>"><img src="images/numbers/4.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/4.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
<?php if($low < 5){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=5&low=<?=$low?>"><img src="images/numbers/5.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/5.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
<?php if($low < 6){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=6&low=<?=$low?>"><img src="images/numbers/6.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/6.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>

 <?php if($low < 7){ ?>
    <div style="float:left;"><figure><a href="?high=7&low=<?=$low?>"><img src="images/numbers/7.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left;"><figure><img src="images/numbers/gray/7.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
 <?php if($low < 8){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=8&low=<?=$low?>"><img src="images/numbers/8.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/8.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
 <?php if($low < 9){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=9&low=<?=$low?>"><img src="images/numbers/9.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/9.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
 <?php if($low < 10){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=10&low=<?=$low?>"><img src="images/numbers/10.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/10.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
 <?php if($low < 11){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=11&low=<?=$low?>"><img src="images/numbers/11.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/11.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
 <?php if($low < 12){ ?>
    <div style="float:left; margin-left:4px;"><figure><a href="?high=12&low=<?=$low?>"><img src="images/numbers/12.jpg" alt="" height="180" width="135"></a></figure></div>
    <?php } else{ ?>
    <div style="float:left; margin-left:4px;"><figure><img src="images/numbers/gray/12.jpg" alt="" height="180" width="135"></figure></div>
    <?php } ?>
</div>
