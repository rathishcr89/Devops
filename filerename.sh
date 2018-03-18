#cur_mon=$(date +%Y-%m)
cur_mon="2018-2"
prev_mon=`date -d "$(date +%Y-%m-01) -1 day" +%Y-%m`
i=`find . -name "*$prev_mon*.csv" | wc -l`
i=$((i-1))
var=`find . -name "*$cur_mon*.csv" | wc -l`
if [ $var -ge 1 ]
then
for line in  *$cur_mon*.csv
do
orgfilename=$line
tmpfilename=`echo $line | cut -d'_' -f-2`
lastday=`date -d "$(date +%Y-%m-01) -1 day" +%Y-%m-%d`
newfilename="${tmpfilename}_${lastday}.csv"
if [ -f "$newfilename" ]
then
i=$((i+1))
newfilename="${tmpfilename}_${lastday}_${i}.csv"
fi
mv $orgfilename $newfilename
echo "file $orgfilename renamed as $newfilename"
done
else
echo "no files found for this month to rename"
fi
