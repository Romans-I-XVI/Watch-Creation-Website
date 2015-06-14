import urllib
import urllib2
import re
import sys

def download(url):
	link = getUrl(url)
	match=re.compile('data-video-id="(.+?)"').findall(link)
	testfile = urllib.URLopener()
	filecount = 0
	for match in match:
		filecount += 1
		thumb = "http://img.youtube.com/vi/"+match+"/0.jpg"
		testfile.retrieve(thumb, "Beginnings_"+str(filecount)+".jpg")


##################################################################################################################################

def getUrl(url):
	req = urllib2.Request(url)
        req.add_header('User-Agent', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3')
        response = urllib2.urlopen(req)
        link=response.read()
        response.close()
	return link

##################################################################################################################################

def get_params():
        param=[]
        paramstring=sys.argv[2]
        if len(paramstring)>=2:
                params=sys.argv[2]
                cleanedparams=params.replace('?','')
                if (params[len(params)-1]=='/'):
                        params=params[0:len(params)-2]
                pairsofparams=cleanedparams.split('&')
                param={}
                for i in range(len(pairsofparams)):
                        splitparams={}
                        splitparams=pairsofparams[i].split('=')
                        if (len(splitparams))==2:
                                param[splitparams[0]]=splitparams[1]
                                
        return param

download("http://www.youtube.com/playlist?list=PLBAE82586B7EABD77")

