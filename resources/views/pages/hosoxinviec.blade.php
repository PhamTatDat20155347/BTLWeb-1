
     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(img/noise.jpg); }
        .clear { clear: both; }
        #container { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h3 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h3 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>

<div id="container" style="background-color:#FDFDFD; color: #393939; padding: 10px;border: 1px solid #929292;">
        <a style="color: green; display: inline-block; " class="back-dashboard m-b-sm" href="suahoso/{{$cv->id}}"><span><i class="fa fa-arrow-right"></i> Chỉnh sửa hồ sơ</span></a>
        <form>
        <img src="upload/cv/blip_1.jpg" alt="Logo" id="pic" />
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
            <h1 class="fn"><input type="text" name="" value="{{$cv->fullname}}" style="border: 0px;"></h1>
            <p>
                Phone: <span class="tel"><input type="" name="" value="{{$cv->phone}}" style="border: 0px;"></span><br />
                Email: <a class="email" href="mailto:greatoldone@lovecraft.com">{{Auth::user()->email}}</a><br>
                Birthday: <span class="tel">{{$cv->birthday}}</span><br />
                Giới tính: <span class="">
                	@if($cv->gender == 0)
                		{{"Nam"}}
                	@elseif($cv->gender == 1)
                		{{"Nữ"}}
                	@else
                		{{"Khác"}}
                	@endif
                </span>
            </p>

        </div>
                
        <div id="objective">
            <p>
                {{$cv->infomation}}
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Học vấn</dt>
            <dd>
                <h3>{{$cv->education}}</h3>
                <p><strong>Major:</strong> Public Relations<br />
                   <strong>Minor:</strong> </p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Kỹ năng nghề nghiệp</dt>
            <dd>
                <h3>Office skills</h3>
                <p>{{$cv->skill}}</p>
                
                <h3>Computer skills</h3>
                <p>Microsoft productivity software (Word, Excel, etc), Adobe Creative Suite, Windows</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Kinh nghiệm</dt>
            <dd>
                <h3>Doomsday Cult <span>Leader/Overlord - Baton Rogue, LA - 1926-2010</span></h3>
                <ul>
                    <li>{{$cv->experience}}</li>
                </ul>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Dự án</dt>
            <dd>World Domination, Deep Sea Diving, Murder Most Foul</dd>
            
            <dd class="clear"></dd>
            
            <dt>Hiện tại</dt>
            <dd>Available on request</dd>
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    
    </form>
    </div>