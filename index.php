<?php require_once('inc/header.phtml');

$meet = simplexml_load_file('xml/meet.xml');

require_once 'inc/meet_row.php';

?>

<div id="home-content">
    <div id="home-banner">
        <div id="banner-header" class="margin-top-bottom-10px"></div>
        <div id="banner">
            <div id="banner-content">
                <div id="banner-nav-left">

                </div>
                <div id="banner-counter"></div>
                <div id="banner-nav-right">

                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
        <div id="banner-footer" class="margin-top-bottom-10px"></div>
    </div>
</div>
<div id="content">
        <?php create_row(0,$meet->bride_and_groom->name,$meet->bride_and_groom->img,$meet->bride_and_groom->content); ?>
</div>
<div style="clear:both;"></div>

<script type="text/javascript">

    function updateCountDown(){
        var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
        var oneHour = 60*60*1000;
        var oneMinute = 60*1000;
        var oneSecond = 1000;

        var big_day = new Date("September 20, 2014 17:00:00");
        var today = new Date();

        var difMilli = Math.floor(Math.abs(today.getTime() - big_day.getTime()));
        var diffDays = Math.floor((difMilli)/(oneDay));
        var diffHours = Math.floor(((difMilli)%(oneDay))/oneHour);
        var diffMins = Math.floor(((difMilli)%(oneHour))/oneMinute);
        var diffSecs = Math.floor(((difMilli)%(oneMinute))/oneSecond);

        if(diffDays < 100){
            if(diffDays < 10){
                diffDays = '0' + '' + diffDays;
            }
        diffDays = '0' + '' + diffDays;
        }

        if(diffHours < 10){
         diffHours = '0' + '' + diffHours;
        }

        if(diffMins < 10){
            diffMins = '0' + '' + diffMins;
        }

        if(diffSecs < 10){
            diffSecs = '0' + '' + diffSecs;
        }
        document.getElementById('banner-counter').innerHTML = '<table><tr><td rowspan="2">' +
                                                           '<span class="days_time">' + diffDays + '</span></td><td>' +
                                                           '<span class="days_text">Days&nbsp;</span></td></tr><tr><td>' +
                                                           '<span class="hours_time">' + diffHours + '</span>' +
                                                           '<span class="hours_text">Hrs</span></td></tr></table><table><tr><td rowspan="2">' +
                                                            '<span class="mins_time">' + diffMins + '</span></td><td>' +
                                                            '<span class="mins_text">Minutes&nbsp;</span></td></tr><tr><td>' +
                                                            '<span class="secs_time">' + diffSecs + '</span>' +
                                                            '<span class="secs_text">&nbsp;Secs</span></td></tr></table>';

        setTimeout(updateCountDown, 1000);
    }

    updateCountDown();

</script>
<?php require_once('inc/footer.phtml'); ?>
