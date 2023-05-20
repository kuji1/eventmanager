<?php

if($_SERVER['REQUEST_URI'] !== "/") {
    $id = substr($_SERVER['REQUEST_URI'], 1);
} else {
    $id = null;
}

function getEvent($id) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "localhost:8080/events/" . $id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $event = curl_exec($ch);
        curl_close($ch);

        return $event;
}

function getEvents() {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "localhost:8080/events");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $events = curl_exec($ch);
        curl_close($ch);

        return $events;
}

echo "<!DOCTYPE html>";
echo "<html lang=\"en\">";
echo "  <head>";
echo "    <meta charset=\"UTF-8\">";
echo "    <title>#Grudev Events</title>";
echo "    <link rel=\"stylesheet\" href=\"style.css\">";
echo "  </head>";
echo "  <body>";
echo <<<EOL
<p><svg width="368" height="72" viewBox="0 0 92 18" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_240_3)">
<path d="M0 10.4601V7.51694H3.12669L6.01287 8.03397L6.2133 7.51694L3.80815 5.88628L1.60343 3.65904L3.68789 1.59089L5.93269 3.77836L7.57621 6.16468L8.09733 5.96582L7.57621 3.10223V0H10.5426V3.10223L10.0214 5.96582L10.5426 6.16468L12.1861 3.77836L14.4309 1.59089L16.5153 3.65904L14.3106 5.88628L11.9055 7.51694L12.1059 8.03397L14.9921 7.51694H18.1188V10.4601H14.9921L12.1059 9.94304L11.9055 10.4601L14.3106 12.0907L16.5153 14.318L14.4309 16.3861L12.1861 14.1987L10.5426 11.8123L10.0214 12.0112L10.5426 14.8748V17.977H7.57621V14.8748L8.09733 12.0112L7.57621 11.8123L5.93269 14.1987L3.68789 16.3861L1.60343 14.318L3.80815 12.0907L6.2133 10.4601L6.01287 9.94304L3.12669 10.4601H0Z" fill="#0D5F5B"/>
<path d="M29.4629 16.5191C28.5009 16.5191 27.6257 16.3069 26.8373 15.8827C26.0623 15.4452 25.441 14.8155 24.9733 13.9935C24.519 13.1583 24.2919 12.1441 24.2919 10.951V7.61009C24.2919 5.82035 24.7996 4.44821 25.8151 3.49368C26.8306 2.52589 28.2069 2.04199 29.944 2.04199C31.6677 2.04199 32.9972 2.49937 33.9325 3.41413C34.8812 4.31563 35.3555 5.54194 35.3555 7.09306V7.1726H32.75V7.01351C32.75 6.52299 32.6431 6.07887 32.4293 5.68114C32.2289 5.28342 31.9215 4.97187 31.5073 4.7465C31.0931 4.50787 30.572 4.38855 29.944 4.38855C29.0086 4.38855 28.2737 4.67358 27.7392 5.24365C27.2048 5.81372 26.9375 6.58927 26.9375 7.57032V10.9907C26.9375 11.9585 27.2048 12.7407 27.7392 13.3373C28.2737 13.9206 29.022 14.2123 29.9841 14.2123C30.9461 14.2123 31.6476 13.9604 32.0886 13.4566C32.5295 12.9528 32.75 12.3165 32.75 11.5475V11.3487H29.4229V9.12144H35.3555V16.2407H32.9103V14.9083H32.5495C32.456 15.1337 32.3023 15.3723 32.0886 15.6242C31.8881 15.8761 31.5808 16.0882 31.1666 16.2605C30.7524 16.4329 30.1845 16.5191 29.4629 16.5191Z" fill="black" fill-opacity="0.25"/>
<path d="M37.9633 16.2407V6.37716H40.4486V7.49078H40.8094C40.9564 7.09306 41.1969 6.80139 41.5309 6.61579C41.8784 6.43019 42.2792 6.33739 42.7335 6.33739H43.9361V8.56463H42.6934C42.0521 8.56463 41.5243 8.73697 41.11 9.08166C40.6958 9.4131 40.4887 9.93014 40.4887 10.6328V16.2407H37.9633Z" fill="black" fill-opacity="0.25"/>
<path d="M49.6981 16.3997C48.9231 16.3997 48.2417 16.2274 47.6537 15.8827C47.0792 15.5248 46.6315 15.0342 46.3109 14.4111C45.9902 13.788 45.8298 13.0721 45.8298 12.2634V6.37716H48.3552V12.0646C48.3552 12.807 48.5356 13.3638 48.8964 13.735C49.2705 14.1062 49.7983 14.2918 50.4798 14.2918C51.2548 14.2918 51.8561 14.0399 52.2836 13.5361C52.7112 13.0191 52.925 12.3032 52.925 11.3884V6.37716H55.4504V16.2407H52.9651V14.9481H52.6043C52.444 15.2795 52.1433 15.6043 51.7024 15.9225C51.2615 16.2407 50.5934 16.3997 49.6981 16.3997Z" fill="black" fill-opacity="0.25"/>
<path d="M57.6166 16.2406V13.9338H59.4605V4.6271H57.6166V2.32031H63.3889C65.273 2.32031 66.7027 2.79758 67.6781 3.75211C68.6669 4.69338 69.1613 6.09867 69.1613 7.96796V10.5929C69.1613 12.4622 68.6669 13.8741 67.6781 14.8287C66.7027 15.7699 65.273 16.2406 63.3889 16.2406H57.6166ZM62.1062 13.8542H63.429C64.498 13.8542 65.2796 13.5758 65.774 13.019C66.2684 12.4622 66.5156 11.68 66.5156 10.6725V7.88841C66.5156 6.8676 66.2684 6.08541 65.774 5.54186C65.2796 4.98505 64.498 4.70664 63.429 4.70664H62.1062V13.8542Z" fill="#0D5F5B"/>
<path d="M75.9762 16.519C74.9874 16.519 74.1122 16.3135 73.3506 15.9025C72.6023 15.4783 72.0144 14.8883 71.5868 14.1326C71.1726 13.3637 70.9655 12.4622 70.9655 11.4281V11.1895C70.9655 10.1554 71.1726 9.26055 71.5868 8.50488C72.001 7.73595 72.5822 7.146 73.3305 6.73502C74.0788 6.31078 74.9473 6.09867 75.9361 6.09867C76.9115 6.09867 77.76 6.31741 78.4815 6.75491C79.2031 7.17914 79.7643 7.77573 80.1651 8.54465C80.566 9.30032 80.7664 10.1819 80.7664 11.1895V12.0446H73.5309C73.5577 12.7207 73.8115 13.2709 74.2926 13.6951C74.7736 14.1194 75.3615 14.3315 76.0563 14.3315C76.7645 14.3315 77.2856 14.179 77.6197 13.8741C77.9537 13.5692 78.2076 13.2311 78.3813 12.8599L80.4457 13.9338C80.2587 14.2785 79.9848 14.6563 79.624 15.0673C79.2766 15.465 78.8089 15.8097 78.221 16.1014C77.6331 16.3798 76.8848 16.519 75.9762 16.519ZM73.551 10.1753H78.2009C78.1475 9.60524 77.9137 9.14786 77.4994 8.80317C77.0986 8.45848 76.5708 8.28613 75.916 8.28613C75.2346 8.28613 74.6934 8.45848 74.2926 8.80317C73.8917 9.14786 73.6445 9.60524 73.551 10.1753Z" fill="#0D5F5B"/>
<path d="M84.8246 16.2406L81.6579 6.37707H84.3436L86.6485 14.411H87.0093L89.3142 6.37707H92L88.8332 16.2406H84.8246Z" fill="#0D5F5B"/>
</g>
<defs>
<clipPath id="clip0_240_3">
<rect width="92" height="18" fill="white"/>
</clipPath>
</defs>
</svg></p>
EOL;
if ($id != null) {
    $event = json_decode(getEvent($id));
    $name = $event->{"name"};
    $date = $event->{"date"};

    echo "	<h1>$name</h1>";
    echo "	<p>Event date - $date</p>";
} else {
    $events = json_decode(getEvents());

    foreach ($events as $event) {
        $id = $event->{"id"};
        $name = $event->{"name"};
        $date = $event->{"date"};

        echo "<h1><a href=\"/$id\">$name</a></h1>";
        echo "<p>Event date - $date</p>";
        echo "<hr>";
    }
}
echo "  </body>";
echo "</html>";

