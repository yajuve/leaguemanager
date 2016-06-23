<?php
/**
	Template page for the stats of league
	Kanfoud Mohamed Raouf, june 2016.
*/
?>
<table class="leaguemanager stats-global" style="width:auto">
	<caption><?php _e( 'Stats Global', 'leaguemanager' ) ?></caption>
	<tr> 
		<td><?php _e( 'Day Played', 'leaguemanager' ) ?></td>
		<td><?php echo $stats_global->day_played ?></td>
	<tr>
	</tr>
		<td><?php _e( 'Match Played', 'leaguemanager' ) ?></td>
		<td><?php echo $stats_global->match_played ?></td>
	<tr>
	</tr>
		<td><?php _e( 'Sum Goal', 'leaguemanager' ) ?></td>
		<td><?php echo $stats_global->sum_buts ?></td>
	<tr>
	<tr>
		<td><?php _e( 'Goal Home', 'leaguemanager' ) ?></td>
		<td><?php echo $stats_global->sum_home_buts ?></td>
	</tr>
	<tr>
		<td><?php _e( 'Goal Away', 'leaguemanager' ) ?></td>
		<td><?php echo $stats_global->sum_away_buts ?></td>
	</tr>
</table>

<table class="leaguemanager stats-points" style="width:auto">
	<caption><?php _e( 'Stats', 'leaguemanager' ) ?></caption>
	<tr> 
		<td><?php _e( 'Best Attack', 'leaguemanager' ); echo ' : '.$performance['best_attack'][0]->goals ?></td>
		<td><?php _e( 'Best Defence', 'leaguemanager' ); echo ' : '.$performance['best_defence'][0]->goals ?></td>
	<tr>
	</tr>
		<td>
			<?php foreach($performance['best_attack'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
		<td>
			<?php foreach($performance['best_defence'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
	<tr>
	<tr> 
		<td><?php _e( 'Bad Attack', 'leaguemanager' ); echo ' : '.$performance['bad_attack'][0]->goals ?></td>
		<td><?php _e( 'Bad Defence', 'leaguemanager' ); echo ' : '.$performance['bad_defence'][0]->goals ?></td>
	<tr>
	</tr>
		<td>
			<?php foreach($performance['bad_attack'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
		<td>
			<?php foreach($performance['bad_defence'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
	<tr>
</table>

<table class="leaguemanager" style="width:auto">
	<caption><?php _e( 'Stats', 'leaguemanager' ) ?></caption>
	<tr> 
		<td><?php _e( 'Most Win', 'leaguemanager' ); echo ' : '.$performance['most_win'][0]->number ?></td>
		<td><?php _e( 'Most Draw', 'leaguemanager' ); echo ' : '.$performance['most_draw'][0]->number ?></td>
		<td><?php _e( 'Most Lost', 'leaguemanager' ); echo ' : '.$performance['most_lost'][0]->number ?></td>
	<tr>
	</tr>
		<td>
			<?php foreach($performance['most_win'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
		<td>
			<?php foreach($performance['most_draw'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
		<td>
			<?php foreach($performance['most_lost'] as $team){
				echo $team->title.'<br>';
			} ?>
		</td>
	<tr>
</table>