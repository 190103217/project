Hello <i>{{ $demo->receiver }}</i>,
<p>A small survey of our customers.</p>
 
 
<div>
<p><b>First:</b>&nbsp;{{ $demo->demo_one }}</p>
<p><b>Second:</b>&nbsp;{{ $demo->demo_two }}</p>
</div>
 
<p><u>COVID-19 information:</u></p>
 
<div>
<p><b>Note:</b>&nbsp;{{ $testVarOne }}</p>
<p>&nbsp;{{ $testVarTwo }}</p>
</div>
 
Thank You,
<br/>
<i>{{ $demo->sender }}</i>