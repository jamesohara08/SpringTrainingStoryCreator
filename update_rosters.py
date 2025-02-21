import statsapi
import json

team_list = [109,144,110,111,112,145,113,114,115,116,117,118,108,119,146,158,142,121,147,133,143,134,135,137,136,138,139,140,141,120]

roster_dict = {}
for team in team_list:
	roster = statsapi.roster(team).split('\n')
	player_list = []
	for player in roster:
		name = player.split("  ")[-1].strip()
		if len(name) == 0:
			continue
		player_list.append(name)
	roster_dict[team] = player_list

with open("team_rosters.json", "w") as out_f:
	json.dump(roster_dict,out_f)