Email pricing using our delivery system:
- (1) $0.25 per 1000 emails sent
- (2) $0.39 per 1Gb of data out (message body and attachments)
 
For example price for 1000 emails sent with 3Mb attachment (hi-quality picture 1600x1200)
for emails sent = $0.25
for data out = 3Mb * 1000 * $0.39/Gb = 3 * $0.39 = $1.17
TOTAL cost of the delivery of 1000 emails with 3Mb attachment each will be $1.42



Email pricing using your smtp server.
We charge for data out handling only:
- $0.27 per 1Gb of data sent out (message body and attachments)

For example price for th same 1000 emails as on above example
for data out = 3Mb * 1000 * $0.27/Gb = 3 * $0.27 = $0.81
TOTAL cost of the delivery of 1000 emails with 3Mb attachment each will be $0.81


<code>
if(($files = @scandir($dir)) === false)
{
    _error("Unable to scandir '$dir');
    return false;
}

$need_thumbs = array();

foreach($files as $file)
{
    // skip .xxx
    
    $tfile = "$tdir/$file";
    if(!is_readable($tfile)
    {
        // no thumbnail file - need to create
        $need_thumbs[] = $file;
        continue;
    }
    
    if(($stats = stat($tfile)) === false)
    {
        _error("Can't get stats for '$tfile');
        return false;
    }
    $tmtime = max(array($stat['ctime'], $stat['mtime']));
    
    if(($stats = stat($file)) === false)
    {
        _error("Can't get stats for '$file');
        return false;
    }
    $mtime = max(array($stat['ctime'], $stat['mtime']));
    
    if($mtime > $tmtime) 
    {
        // original was updated - need update thumbnail as well
        $need_thumbs[] = $file;
    }
}    
    
    
    
