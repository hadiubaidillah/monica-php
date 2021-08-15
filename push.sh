git add -A && git commit -m "MONICA" && git push -u origin master && ssh -tp 65002 u577519362@31.220.106.101 'cd public_html/monica/ && git checkout . && git pull'
