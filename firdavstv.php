<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('API_KEY','1804495170:AAFLmzc0lT83GG4WjO3Ln38YiULD2eHgGUE'); //bot tokeni

$admin = "1306421906";//admin ID
$bot = "Ilmnuribot"; //bot user @siz
$userR = "cosmos_fedka"; //admin user
$kanal = ""; //kanal user 1
$kanal1 = "dasturlash_kanali"; //kanal user 2

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}   

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$uid = $message->from->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$text = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$replytx = $message->reply_to_message->text;
$reply = $message->reply_to_message->text;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$photo = $message->photo;
$gif = $message->animation;
$video = $message->video;
$music = $message->audio;
$voice = $message->voice;
$sticker = $message->sticker;
$document = $message->document;
$fayl = $message->fayl;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$user_id = $update->message->from->id;
$ufname = $update->message->from->first_name;
$chat_id = $message->chat->id;
$blocklar = file_get_contents("block.dat");
$otex = "💫Orqaga";



$update = json_decode(file_get_contents('php://input')); 
$message = $update->message; 
$message_id = $message->message_id; 
$data = $update->callback_query->data; 
$chat_id = $message->chat->id; 
$text = $message->text; 
$nick = $message->from->first_name; 
$fnick = $message->from->last_name; 
$user_id = $message->from->id; 
$gru = "@dasturlashuchungurpa";
$kanall = "@dasturchilaruchunilm";
 
$join = bot('getChatMember',[ 
'chat_id'=>"$kanall", 
'user_id'=>$user_id 
]); 
$status = $join->result->status; 
 
   if($message && !($status == "administrator" or $status =="creator" or $status  == "member")) { 
   bot('sendChatAction',[ 
   'chat_id' => $chat_id, 
   'action' => 'typing' 
   ]); 
   bot('sendMessage',[ 
       'chat_id'=>$chat_id, 
       'text'=>"Quyidagi Kanallarimizga Obuna Boʻling. Botni Keyin Toʻliq Ishlatishingiz Mumkin!

📌┇ A'zo Bo'lib /start ni Bosing" , 
       'parse_mode'=>'html', 
       'reply_markup' => json_encode([ 
       'inline_keyboard' => [ 
       [['text'=> "➕ A'zo bo'lish", 'url' => "https://t.me/$kanal"]]
       ]
       ])
      ]); return false;}



$otex = "💫Orqaga";
$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🕋Allohning go‘zal ismlari🤲"],],
[['text'=>"🕋Islom dini🕋"],['text'=>"🤲Namoz🤲"],],
[['text'=>"⏳Namoz vaqtlari⏳"],['text'=>"🛁Poklanish🚿"],],
[['text'=>"☪Suralar🤲"],['text'=>"🛐Ro‘za🤲"],],
[['text'=>"🌁 Jannat Haqida 📜"],],
[['text'=>"🎙Maruzalar🎶"],['text'=>"📖Qur‘oni karim📖"],],
[['text'=>"👨‍Arab Alifbosi✍️"],['text'=>"🕋☪Qurʼon kitobi☪🕋"],],
[['text'=>"🧕Muslima Kundaligi🧕"],['text'=>"🤲Ming bir xadis kitob🤲"],],
[['text'=>"🕋Saodat asri qissalari kitob🕋"],],
[['text'=>"🌏 Inson Yaratilishi 🌎"],['text'=>"😢 Qiyomat Kuni 📜"],],
[['text'=>"☝️Olti diniy kalima☝️"],['text'=>"☝️Qirq farz☝️"],],
[['text'=>"🎉Diniy bayramlar✨"],['text'=>"👨‍💻Bizning BotLar🤖"],],
[['text'=>"☝️Qabrda bo‘ladigan savol-javoblar☝️"],],
[['text'=>"📰Yangiliklar📊"],['text'=>"🤖Bot haqida⛑"],],
[['text'=>"👨‍✈️Bot AdminI👨‍✈️"],],
]
]);

$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"↗️Xabar↗️"],],
[['text'=>"📈 Statistika 📈"],['text'=>"🗳Bot Kodi🗳"],],
[['text'=>"❇Userga Xabar❇"],],
[['text'=>"🚫Ban🚫"],['text'=>"✅Bandan olish✅"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$islom = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"☪Islom dini tarixi📝"],['text'=>"☪Qur‘oni karim tarixi📝"],],
[['text'=>"☪Payg‘ambarlar tarixi📝"],['text'=>"☪Muhammad (s.a.v)👳‍♂"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$ismlar = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Alloh"],['text'=>"Ar-Rohmān"],['text'=>"Ar-Rohīm"],],
[['text'=>"Al-Malik"],['text'=>"Al-Quddūs"],['text'=>"As-Salām"],],
[['text'=>"Al-Mu’min"],['text'=>"Al-Muhaymin"],['text'=>"Al-Aziz"],],
[['text'=>"Al-Jabbār"],['text'=>"Al-Mutakabbir"],['text'=>"Al-Holiq"],],
[['text'=>"Al-Bāri"],['text'=>"Al-Musovvir"],['text'=>"Al-Gʻoffār"],],
[['text'=>"Al-Qohhār"],['text'=>"Al-Vahhāb"],['text'=>"Ar-Rozzāq"],],
[['text'=>"Al-Fattāh"],['text'=>"Al-'Alīm"],['text'=>"Al-Qobiz"],],
[['text'=>"Al-Bāsit"],['text'=>"Al-Hofiz"],['text'=>"Al-Muqīt"],],
[['text'=>"An-Hasīb"],['text'=>"Al-Jalīl"],['text'=>"Al-Karīm"],],
[['text'=>"Ar-Roqīb"],['text'=>"Al-Mujīb"],['text'=>"Al-Vāsi"],],
[['text'=>"Al-Hakīm"],['text'=>"Al-Vadūd"],['text'=>"Al-Majīd"],],
[['text'=>"Al-Bā'is"],['text'=>"Ash-Shahīd"],['text'=>"Al-Haqq"],],
[['text'=>"🇺🇿TG Til"],['text'=>"♐Habar♐"],['text'=>"💱Kurs💱"],],

]
]);

$ismlaruz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"✍️ Matn 📜"],['text'=>"🎵 Audio 🎧"],],
[['text'=>"🎞️ Video 🎬"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$aarabic = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"1-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"2-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"3-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"4-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"5-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"6-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"7-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"8-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"9-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"10-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"11-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"12-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"13-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"14-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"15-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"16-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"17-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"18-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"19-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"20-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"21-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"22-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"23-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"24-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"25-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"26-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"27-D͜͡A͜͡R͜͡S͜͡ ✍️"],],
[['text'=>"28-D͜͡A͜͡R͜͡S͜͡ ✍️"],['text'=>"29-D͜͡A͜͡R͜͡S͜͡ ✍️"],],

[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$namoz = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛐Namoz haqida📝"],['text'=>"🛐Namoz vaqtlari⏳"],],
[['text'=>"🛐Namoz o‘qishni o‘rganamiz🤲"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$sura = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎵Audio shaklida🎶"],],
[['text'=>"📃Suralar haqida📝"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$qaudio = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📖Fotiha surasi"],],				
[['text'=>"📖Baqara surasi"],['text'=>"📖Imron surasi"],['text'=>"📖Niso surasi"],],
[['text'=>"📖Maida surasi"],['text'=>"📖Anam surasi"],['text'=>"📖Arof surasi"],],
[['text'=>"📖Anfol surasi"],['text'=>"📖Tavba surasi"],['text'=>"📖Yunus surasi"],],
[['text'=>"📖Hud surasi"],['text'=>"📖Yusuf surasi"],['text'=>"📖Rad surasi"],],
[['text'=>"📖Ibrohim surasi"],['text'=>"📖Hijr surasi"],['text'=>"📖Nahl surasi"],],
[['text'=>"📖Isro surasi"],['text'=>"📖Kahf surasi"],['text'=>"📖Maryam surasi"],],
[['text'=>"📖Toha surasi"],['text'=>"📖Anbiyo suarsi"],['text'=>"📖Haj surasi"],],
[['text'=>"📖Muminun surasi"],['text'=>"📖Nur surasi"],['text'=>"📖Furqon surasi"],],
[['text'=>"📖Shuaro surasi"],['text'=>"📖Naml surasi"],['text'=>"📖Qasos surasi"],],
[['text'=>"📖Ankabut surasi"],['text'=>"📖Rum Surasi"],['text'=>"📖Luqmon surasi"],],
[['text'=>"📖Sajda surasi"],['text'=>"📖Ahzob surasi"],['text'=>"📖Saba surasi"],],
[['text'=>"📖Fotir surasi"],['text'=>"📖Yosin surasi"],['text'=>"📖Soffat surasi"],],
[['text'=>"📖Sod surasi"],['text'=>"📖Zumar surasi"],['text'=>"📖Gofir surasi"],],
[['text'=>"📖Fussilat surasi"],['text'=>"📖Shoro surasi"],['text'=>"📖Zuxruf surasi"],],
[['text'=>"📖Zuhan surasi"],['text'=>"📖Jathiya surasi"],['text'=>"📖Ahqaf surasi"],],
[['text'=>"📖Muhammad surasi"],['text'=>"📖Fath surasi"],['text'=>"📖Hujurat surasi"],],
[['text'=>"📖Qof surasi"],['text'=>"📖Zuriyat surasi"],['text'=>"📖Tur surasi"],],
[['text'=>"📖Najim surasi"],['text'=>"📖Qamar surasi"],['text'=>"📖Rohman surasi"],],
[['text'=>"📖Voqiya surasi"],['text'=>"📖Hadid surasi"],['text'=>"📖Mujadila surasi"],],
[['text'=>"📖Hashir surasi"],['text'=>"📖Mumtahina surasi"],],
[['text'=>"📖Soff surasi"],['text'=>"📖Juma surasi"],['text'=>"📖Munofiqun surasi"],],
[['text'=>"📖Taghabun surasi"],['text'=>"📖Taloq surasi"],['text'=>"📖Tahrim surasi"],],
[['text'=>"📖Mulk surasi"],['text'=>"📖Qalam surasi"],['text'=>"📖Haqqa surasi"],],
[['text'=>"📖Muorij surasi"],['text'=>"📖Nuh surasi"],['text'=>"📖jinn surasi"],],
[['text'=>"📖Muzzammil surasi"],['text'=>"📖Muddathir surasi"],['text'=>"📖Qiyama surasi"],],
[['text'=>"📖Insan surasi"],['text'=>"📖Mursalat surasi"],['text'=>"📖Naba surasi"],],
[['text'=>"📖Naziat surasi"],['text'=>"📖Abasa surasi"],['text'=>"📖Takawir surasi"],],
[['text'=>"📖Infitar surasi"],['text'=>"📖Mutaffifeen surasi"],['text'=>"📖Inshiqaq surasi"],],
[['text'=>"📖Burooj surasi"],['text'=>"📖Tariq surasi"],['text'=>"📖Ala surasi"],],
[['text'=>"📖Ghashiya surasi"],['text'=>"📖Fajir surasi"],['text'=>"📖Balad surasi"],],
[['text'=>"📖Shams surasi"],['text'=>"📖Lail surasi"],['text'=>"📖Dhuha surasi"],],
[['text'=>"📖Sharh surasi"],['text'=>"📖Teen surasi"],['text'=>"📖falaq surasi"],],
[['text'=>"📖Qadr surasi"],['text'=>"📖Bayyina surasi"],['text'=>"📖Zilzila surasi"],],
[['text'=>"📖Adiyat surasi"],['text'=>"📖Qaria surasi"],['text'=>"📖Takathur surasi"],],
[['text'=>"📖Asr surasi"],['text'=>"📖Hamza surasi"],['text'=>"📖Fil surasi"],],
[['text'=>"📖Quraysh surasi"],['text'=>"📖Moun surasi"],['text'=>"📖Kavsar surasi"],],
[['text'=>"📖Kofirun surasi"],['text'=>"📖Nosr surasi"],['text'=>"📖Masad surasi"],],
[['text'=>"📖Ixlos surasi"],['text'=>"📖Falaq surasi"],['text'=>"📖Nos surasi"],],
[['text'=>"⬅️Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$mano = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎶Fotiha surasi"],],				
[['text'=>"🎶Baqara surasi"],['text'=>"🎶Imron surasi"],['text'=>"🎶Niso surasi"],],
[['text'=>"🎶Maida surasi"],['text'=>"🎶Anam surasi"],['text'=>"🎶Arof surasi"],],
[['text'=>"🎶Anfol surasi"],['text'=>"🎶Tavba surasi"],['text'=>"🎶Yunus surasi"],],
[['text'=>"🎶Hud surasi"],['text'=>"🎶Yusuf surasi"],['text'=>"🎶Rad surasi"],],
[['text'=>"🎶Ibrohim surasi"],['text'=>"🎶Hijr surasi"],['text'=>"🎶Nahl surasi"],],
[['text'=>"🎶Isro surasi"],['text'=>"🎶Kahf surasi"],['text'=>"🎶Maryam surasi"],],
[['text'=>"🎶Toha surasi"],['text'=>"🎶Anbiyo suarsi"],['text'=>"🎶Haj surasi"],],
[['text'=>"🎶Muminun surasi"],['text'=>"🎶Nur surasi"],['text'=>"🎶Furqon surasi"],],
[['text'=>"🎶Shuaro surasi"],['text'=>"🎶Naml surasi"],['text'=>"🎶Qasos surasi"],],
[['text'=>"🎶Ankabut surasi"],['text'=>"🎶Rum Surasi"],['text'=>"🎶Luqmon surasi"],],
[['text'=>"🎶Sajda surasi"],['text'=>"🎶Ahzob surasi"],['text'=>"🎶Saba surasi"],],
[['text'=>"🎶Fotir surasi"],['text'=>"🎶Yosin surasi"],['text'=>"🎶Soffat surasi"],],
[['text'=>"🎶Sod surasi"],['text'=>"🎶Zumar surasi"],['text'=>"🎶Gofir surasi"],],
[['text'=>"🎶Fussilat surasi"],['text'=>"🎶Shoro surasi"],['text'=>"🎶Zuxruf surasi"],],
[['text'=>"🎶Zuhan surasi"],['text'=>"🎶Jathiya surasi"],['text'=>"🎶Ahqaf surasi"],],
[['text'=>"🎶Muhammad surasi"],['text'=>"🎶Fath surasi"],['text'=>"🎶Hujurat surasi"],],
[['text'=>"🎶Qof surasi"],['text'=>"🎶Zuriyat surasi"],['text'=>"🎶Tur surasi"],],
[['text'=>"🎶Najim surasi"],['text'=>"🎶Qamar surasi"],['text'=>"🎶Rohman surasi"],],
[['text'=>"🎶Voqiya surasi"],['text'=>"🎶Hadid surasi"],['text'=>"🎶Mujadila surasi"],],
[['text'=>"🎶Hashir surasi"],['text'=>"🎶Mumtahina surasi"],],
[['text'=>"🎶Soff surasi"],['text'=>"🎶Juma surasi"],['text'=>"🎶Munofiqun surasi"],],
[['text'=>"🎶Taghabun surasi"],['text'=>"🎶Taloq surasi"],['text'=>"🎶Tahrim surasi"],],
[['text'=>"🎶Mulk surasi"],['text'=>"🎶Qalam surasi"],['text'=>"🎶Haqqa surasi"],],
[['text'=>"🎶Muorij surasi"],['text'=>"🎶Nuh surasi"],['text'=>"🎶jinn surasi"],],
[['text'=>"🎶Muzzammil surasi"],['text'=>"🎶Muddathir surasi"],['text'=>"🎶Qiyama surasi"],],
[['text'=>"🎶Insan surasi"],['text'=>"🎶Mursalat surasi"],['text'=>"🎶Naba surasi"],],
[['text'=>"🎶Naziat surasi"],['text'=>"🎶Abasa surasi"],['text'=>"🎶Takawir surasi"],],
[['text'=>"🎶Infitar surasi"],['text'=>"🎶Mutaffifeen surasi"],['text'=>"🎶Inshiqaq surasi"],],
[['text'=>"🎶Burooj surasi"],['text'=>"🎶Tariq surasi"],['text'=>"🎶Ala surasi"],],
[['text'=>"🎶Ghashiya surasi"],['text'=>"🎶Fajir surasi"],['text'=>"🎶Balad surasi"],],
[['text'=>"🎶Shams surasi"],['text'=>"🎶Lail surasi"],['text'=>"🎶Dhuha surasi"],],
[['text'=>"🎶Sharh surasi"],['text'=>"🎶Teen surasi"],['text'=>"🎶falaq surasi"],],
[['text'=>"🎶Qadr surasi"],['text'=>"🎶Bayyina surasi"],['text'=>"🎶Zilzila surasi"],],
[['text'=>"🎶Adiyat surasi"],['text'=>"🎶Qaria surasi"],['text'=>"🎶Takathur surasi"],],
[['text'=>"🎶Asr surasi"],['text'=>"🎶Hamza surasi"],['text'=>"🎶Fil surasi"],],
[['text'=>"🎶Quraysh surasi"],['text'=>"🎶Moun surasi"],['text'=>"🎶Kavsar surasi"],],
[['text'=>"🎶Kofirun surasi"],['text'=>"🎶Nosr surasi"],['text'=>"🎶Masad surasi"],],
[['text'=>"🎶Ixlos surasi"],['text'=>"🎶Falaq surasi"],['text'=>"🎶Nos surasi"],],
[['text'=>"⬅️Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);

$namozh = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Namoz Bu.."],['text'=>"Namozning Farzi.."],],
[['text'=>"Namozning Vojiblari.."],],
[['text'=>"Namozning Sunnatlar.."],['text'=>"Namozning Mustahablari.."],],
[['text'=>"Namozni buzuvchi amallar.."],],
[['text'=>"Namozning Makruhlari.."],],
[['text'=>"Namozning mubohlari"],],
[['text'=>"Erkak va ayollar namozining farqlar"],],
[['text'=>"Namozni buzish joiz bo‘lgan o‘rinlar"],],
[['text'=>"💫Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);

$namozo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌆Bomdod namozi🌆"],],
[['text'=>"🏙Peshin namozi🏜"],],
[['text'=>"🏜Asr namozi🌇"],],
[['text'=>"🌇Shom namozi🌆"],],
[['text'=>"🌃Xufton namozi🌉"],],
[['text'=>"🤲Namozdan keyin o‘qiladigan duolar🤲"],],
[['text'=>"🤲Musofirning namozi🏕"],],
[['text'=>"🤲Qazo namozlar⏳"],],
[['text'=>"🤲Juma namozi🌙"],],
[['text'=>"☪Ikki hayit namozlari🌙"],],
[['text'=>"☪Janoza namozi🤲"],],
[['text'=>"💫Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);



$qoron = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"☪Qur‘oni karim haqida🤲"],],
[['text'=>"☪Qur‘oni karm tarixi📝"],],
[['text'=>"🎙30 pora audio formatda🎶"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);

$vaqt = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🏙 Farg'ona"],['text'=>"🏙 Xiva"],],
 [['text'=>"🏙 Toshkent"],['text'=>"🏙 Namangan"],],
 [['text'=>"🏙 Buxoro"],['text'=>"🏙 Guliston"],],
 [['text'=>"🏙 Jizzax"],['text'=>"🏙 Zarafshon"],],
 [['text'=>"🏙 Qarshi"],['text'=>"🏙 Navoiy"],],
 [['text'=>"🏙 Nukus"],['text'=>"🏙 Samarqand"],],
 [['text'=>"🏙 Termiz"],['text'=>"🏙 Urganch"],],
 [['text'=>"🔝Bosh menyu🔝"],],
]
]);

$pora = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎙1-pora🔉"],['text'=>"🎙2-pora🔉"],['text'=>"🎙3-pora🔉"],],
[['text'=>"🎙4-pora🔉"],['text'=>"🎙5-pora🔉"],['text'=>"🎙6-pora🔉"],],
[['text'=>"🎙7-pora🔉"],['text'=>"🎙8-pora🔉"],['text'=>"🎙9-pora🔉"],],
[['text'=>"🎙10-pora🔉"],['text'=>"🎙11-pora🔉"],['text'=>"🎙12-pora🔉"],],
[['text'=>"🎙13-pora🔉"],['text'=>"🎙14-pora🔉"],['text'=>"🎙15-pora🔉"],],
[['text'=>"🎙16-pora🔉"],['text'=>"🎙17-pora🔉"],['text'=>"🎙18-pora🔉"],],
[['text'=>"🎙19-pora🔉"],['text'=>"🎙20-pora🔉"],['text'=>"🎙21-pora🔉"],],
[['text'=>"🎙22-pora🔉"],['text'=>"🎙23-pora🔉"],['text'=>"🎙24-pora🔉"],],
[['text'=>"🎙25-pora🔉"],['text'=>"🎙26-pora🔉"],['text'=>"🎙27-pora🔉"],],
[['text'=>"🎙28-pora🔉"],['text'=>"🎙29-pora🔉"],['text'=>"🎙30-pora🔉"],],
[['text'=>"⬅️Orqaga⬅️"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$maruza = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Haj va umra haqida batafsil"],],
[['text'=>"Alloh eng yomon ko‘rgan narsa"],],
[['text'=>"Oilani buzishga majburlashga ota-onaning haqqi yo‘q"],],
[['text'=>"Taloq qachon tushadi"],],
[['text'=>"Ajralishuvlar ko‘paysa nima qilinadi"],],
[['text'=>"Taloq qachon ishlatiladi"],],
[['text'=>"Xotinni taloq bilan qo‘rqitish-nomardlik"],],
[['text'=>"Taloq nima degani"],],
[['text'=>"Oila ajralishi sababi"],],
[['text'=>"Kim folbinga borsa"],],
[['text'=>"Ikki dunyoga yetadigan duo"],],
[['text'=>"Savob qilishning eng oson yo‘li"],],
[['text'=>"Соҳиби Журайж qissasi"],],
[['text'=>"Folbinlik"],],
[['text'=>"Maxfiy va jahriy zikrlar"],],
[['text'=>"Safar namozi haqida"],],
[['text'=>"Folbinga ishonuvchilar"],],
[['text'=>"Folbinlik-kufrdir"],],
[['text'=>"Erkar va ayol orasidagi muhabbat"],],
[['text'=>"Nega ishimiz yurishmayabdi"],],
[['text'=>"Internetdagi tanishuv"],],
[['text'=>"Ahli kitob bilan bo‘ladigan munosabat"],],
[['text'=>"Musulmonmizmi"],],
[['text'=>"Din kimdan o‘rganiladi"],],
[['text'=>"Mulk surasining mo‘jizasi"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$maruza = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Haj va umra haqida batafsil"],],
[['text'=>"Alloh eng yomon ko‘rgan narsa"],],
[['text'=>"Oilani buzishga majburlashga ota-onaning haqqi yo‘q"],],
[['text'=>"Taloq qachon tushadi"],],
[['text'=>"Ajralishuvlar ko‘paysa nima qilinadi"],],
[['text'=>"Taloq qachon ishlatiladi"],],
[['text'=>"Xotinni taloq bilan qo‘rqitish-nomardlik"],],
[['text'=>"Taloq nima degani"],],
[['text'=>"Oila ajralishi sababi"],],
[['text'=>"Kim folbinga borsa"],],
[['text'=>"Ikki dunyoga yetadigan duo"],],
[['text'=>"Savob qilishning eng oson yo‘li"],],
[['text'=>"Соҳиби Журайж qissasi"],],
[['text'=>"Folbinlik"],],
[['text'=>"Maxfiy va jahriy zikrlar"],],
[['text'=>"Safar namozi haqida"],],
[['text'=>"Folbinga ishonuvchilar"],],
[['text'=>"Folbinlik-kufrdir"],],
[['text'=>"Erkar va ayol orasidagi muhabbat"],],
[['text'=>"Nega ishimiz yurishmayabdi"],],
[['text'=>"Internetdagi tanishuv"],],
[['text'=>"Ahli kitob bilan bo‘ladigan munosabat"],],
[['text'=>"Musulmonmizmi"],],
[['text'=>"Din kimdan o‘rganiladi"],],
[['text'=>"Mulk surasining mo‘jizasi"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$roza = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌙Ro‘za tutish haqida🤲"],],
[['text'=>"🤲Ro‘za duosi🤲"],['text'=>"🗓Taqvim🗒"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$rozaa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗓Toshkent Taqvimi🗒"],],
[['text'=>"🗓Farg'ona Taqvimi🗒"],],
[['text'=>"💫 OrqagA"],],
]
]);
$pok = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛁G‘usl🚿"],],
[['text'=>"🛁Tahorat🚿"],['text'=>"🏜Tayammum🚿"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$gusul = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"G‘usl haqida"],],
[['text'=>"Qanday hollarda g‘usl qilinadi"],],
[['text'=>"G‘usl qilish farz bo‘lgan holatlar"],],
[['text'=>"G‘usl qilish sunnat bo‘lgan o‘rinlar"],],
[['text'=>"G‘usl qilish mustahab bo‘lgan holatlar"],],
[['text'=>"G‘uslning farzlari va sunnatlari"],],
[['text'=>"↩Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$tahorat = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Tahoratning shartlari"],],
[['text'=>"Tahoratning qismlari"],],
[['text'=>"Tahoratning farzlari"],],
[['text'=>"Tahoratning sunnatlari"],],
[['text'=>"Tahoratning odoblari"],],
[['text'=>"Tahoratning makruhlari"],],
[['text'=>"Tahoratni sindiruvchi amallar"],],
[['text'=>"↩Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$tayamum = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Tayammumning shartlari"],],
[['text'=>"Tayammumning ruknlari"],],
[['text'=>"Tayammum qilish tartibi"],],
[['text'=>"Tayammumning farzlari"],],
[['text'=>"Tayammumning sunnatlari"],],
[['text'=>"Tayammumni buzuvchi amallar"],],
[['text'=>"↩Orqaga"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$yan = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🗳 Bot Kodi 🗳"],],
[['text'=>"🗞Fudbol yangiliklari⚽️"],['text'=>"📰Daryo yangiliklari🌐"],],
[['text'=>"⛅Ob-havo🌧"],['text'=>"💱Valyuta kursi💲"],],
[['text'=>"💰Dollar kursi💸"],['text'=>"🦠Covid-19"],],
[['text'=>"🔝Bosh menyu🔝"],],
]
]);
$bot = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👥Dasturchilar"],['text'=>"🤖Bot"],],
[['text'=>"🤝Homiyimiz"],['text'=>"📝Manbalar"],],
[['text'=>"🔰Qo‘shimcha buyruqlar"],['text'=>"⭕Loyihalarimiz"],],
[['text'=>"⛔Panel⛔"],['text'=>"🔝Bosh menyu🔝"],],
]
]);
$havo = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⛅ Farg'ona"],['text'=>"⛅ Xiva"],],
 [['text'=>"⛅ Andijon"],['text'=>"⛅ Namangan"],],
 [['text'=>"⛅ Buxoro"],['text'=>"⛅ Guliston"],],
 [['text'=>"⛅ Jizzax"],['text'=>"⛅ Zarafshon"],],
 [['text'=>"⛅ Qarshi"],['text'=>"⛅ Navoiy"],],
 [['text'=>"⛅ Nukus"],['text'=>"⛅ Samarqand"],],
 [['text'=>"⛅ Termiz"],['text'=>"⛅ Urganch"],],
 [['text'=>"⛅ Toshkent"],],
[['text'=>"↩Orqaga↩"],['text'=>"🔝Bosh menyu🔝"],],
]
]);


$otmen = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$otdex"],],
]
]);
if(mb_stripos($blocklar,"$user_id")!==false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a>!\nSiz ⛔️ Botimizdan foydalana olmaysiz, chunki botda bloklangansiz!!! Blokdan chiqish uchun ADMIN ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!!!🚫!</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/cosmos_fedka"]],
]
])
]);return false;}


if(mb_stripos($text,"/ban")!==false){
$ex = explode("=",$text);
$user = $ex[1];
file_put_contents("block.dat","$blocklar\n$user");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"<b>✅$user Banlandi!</b>", 
        'parse_mode'=>'html', 
        ]);
        bot('SendMessage',[
   'chat_id'=>$user,
        'text'=>"<b>🚫😡Sizni ⛔bu botda bloklashdi🚫. Endi botimizdan foydalana olmaysiz!</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
'remove_keyboard'=>true,
]),
]);
}

if($text == "🗳Bot Kodi🗳"){
if($cid == $admin){
bot('senddocument',[
'chat_id'=>$cid,
'document'=>new CURLfile(__FILE__),
]);
}
}


if(mb_stripos($text,"/start")!==false){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/4",
'caption'=>"Assalomu Alaykum Va 
Rahmatullahi Barakotuh.
Sizni Botimizda Ko‘rishimizdan Hursandmiz.😊

Marhamat Kerakli  Bo‘limni Tanlang.",
'parse_mode'=>'html',
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Diqqat <a href = 'tg://user?id=$cid'>$cid</a> Botga🤖 /start Bosdi!
<b>🔔 Usernamesi:</b> @$user1
<b>🆔️ Raqami:</b> <code>$cid</code>",
'parse_mode'=>'html',
]);
}


if(mb_stripos($text,"/start")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"Bot Rivojlanishiga O‘z Hissangizni Qo‘shing!

Buning Uchun Botimizni Boshqa Yaqinlaringiz Bilan Ulashing.
Balki Aynan Siz  Kimnidir Gunoh Yo‘ldan Qaytib, To‘g‘ri Yo‘lga Kirishiga Sababchi Bo‘larsiz.",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
if($text == "🔝Bosh menyu🔝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Bosh meynuga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$menu,
]);
}
if($text == "↩Orqaga↩"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$yan,
]);
}
if($text == "💫 OrqagA"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Siz 《Ro‘za》 bo‘limidasiz. 
O‘zingizga kerakli munyuni tanglang..!",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}

if($text == "↩Orqaga"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$pok,
]);
}
if($text == "💫Orqaga"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$namoz,
]);
}
if($text == "⬅️Orqaga"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$sura,
]);
}
if($text == "🔝Orqaga🔝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$qoron,
]);
}
if($text == "⬅️Orqaga⬅️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Orqaga muvafaqiyatli qaytdingiz✔.😊
Marhamat kerakli  bo‘limni tanlang.",
'reply_markup'=>$qoron,
]);
}
if($text == "⛔Panel⛔"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Salom Admin! 
O'zingizga kerakli bo'limni tanlang!",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*Panel Menyusi Faqat Admin uchun Ochiladi!*",
'parse_mode'=>'Markdown',
]);
}
}
if($text == "❇Userga Xabar❇"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Userga Xabar yuborish uchun
/sms 🆔️ Xabar 
shu tarzda yuboring!

Admin: @$userR",
'reply_markup'=>$panel,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨 Admindan Yangi Habar

👤 [$ismi](tg://user?id=$uid)

💌Habar: $sms

📆 $vaqt 🔸  🕰 $time",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi)ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
$lichka=file_get_contents("sirojiddin.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("sirojiddin.db","$lichka\n$cid");
}
}
if($text == "📈 Statistika 📈"){
if($cid == $admin){
$lichka=file_get_contents("sirojiddin.db");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('2 hour'));
$sana=date("d-F, Y-\y\i\l",strtotime("2 hour"));
$haf = date('N',strtotime('2 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$oynomi = date('F', strtotime('2 hour'));
$sana2 = date('z', strtotime('2 hour'));
$anb8 = file_get_contents("https://obhavo.uz/termez"); $ex1=explode("n",$anb8);

$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/surxondaryo-viloyati/tirmiz/');

$ex = explode('title="Havo harorati"',$obh);

$exi = explode('right-container',$ex[1]);

$ubk = str_replace($exi[1],' ',$ex[1]);

$ubk1 = str_replace('dir="ltr">',' ',$ubk);

$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);

$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);

$ubk4 = str_replace('</div>',' ',$ubk3);

$obhavo = trim("$ubk4");
$buoy = date('t', strtotime('2 hour'));
$kun1 = date('z ',strtotime('2 hour')); 
  $a = 360;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>
├▶Kanalimiz: <b>@dasturchilaruchunilm</b>
├▶Kanalimiz: <b>@dasturchilaruchunilm</b>
└▶Admin: <b>@cosmos_fedka</b>

🔷️➰⏰Soat: $time ⏰, 
🔷️➰📅Sana: $sana 📅,
🔷️➰📆Hafta kuni: $hafta,
🔷️➰📅Oy Nomi: $oy ,
🔷️➰🔲Yilning: $sana2 kuni!🔲,
🔷️➰⛅Havo harorati: $obhavo C° ⛅,
🔷️➰🌐Bu oy $buoy kundan iborart!🌐,
🔷️➰❄Yangi yilga 📅$b kun, ☃️$b2 soat⏰, 🎅 $b3 minut, 🎁 $b4 sekund qoldi!,
🔷️➰🌚Ertangi kunga:⏰ $b2 -Soat⏰,🌹$b3 -Minut🥀, ➰ $b4 sekund qoldi!🌐",
'parse_mode' => 'html',
]);
}
}
$xabar = file_get_contents("send.txt");
if($text == "↗️Xabar↗️"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("sirojiddin.db");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'Markdown'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"Hamma userlarga yuborildi!",
'parse_mode'=>'html',
]); unlink("send.txt");
}


if((mb_stripos($text, "/xabar")!==false) and $cid == $admin){
$id = explode("n",$text);
$id1 = $id[1];
$id2 = $id[2];
$finish = bot('SendMessage', [
'chat_id' => $id1,
'parse_mode' => "markdown",
'text' => "$id2

By: [@$bot]",
'disable_web_page_preview' => true,
]);
}
if($finish){
bot('SendMessage', [
'chat_id' => $admin,
'parse_mode' => "markdown",
'text' => "✔️ [$id1](tg://user?id=$id1) *Ga Xabar Yuborildi!✅*",
]);
}



if($text == "🕋Islom dini🕋"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Siz 《Islom Dini》 Bo‘limidasiz.
Quyidagi Bo‘limlardan Birini Tanlang..!",
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Iltimos Barcha Amallar Yakunlanmagunicha Botga Buyruq Bermasangiz",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom (arab. – boʻysunish, itoat etish, oʻzini Alloh irodasiga topshirish) — jahonda keng tarqalgan uch dindan ( buddizm va xristianlik bilan bir qatorda) biri. Islom diniga eʼtiqod qiluvchilar arabcha *muslim* (*sadoqatli*; koʻpligi *muslimun*) deb ataladi. *Muslim*, *muslimun* soʻzining boshqa xalqlar orasida oʻzgacha talaffuz etish (masalan, forslarda – musalmon, oʻzbeklarda – musulmon, qirgʻiz va qozoqlarda – musulmon, Ukraina va Rossiyada – basurman) natijasida bu dinga eʼtiqod qiluvchilar turli nom bilan ataladi. Lekin bularning ichida hozir musulmon iborasi keng tarqalgan.

Jahonda qariyb 1,2 mlrd. kishi Islomga eʼtiqod qiladi. Musulmonlarning 2/3 qismidan koʻprogʻi Osiyoda yashaydi va bu qitʼa aholisining 20% idan ortiqrogʻini tashkil etadi. Qariyb 30% musulmonlar Afrikaga toʻgʻri keladi (qitʼa aholisining deyarli yarmi). Dunyoda musulmon jamoalari mavjud boʻlgan 120 dan ortiq mamlakatdan 40 dan ziyodida musulmonlar aholining koʻpchiligini tashkil qiladi – Shimoliy Afrika, Gʻarbiy Osiyoning barcha mamlakatlarida (Kipr, Livan, Isroil mustasno), Senegal, Gambiya, Niger, Somali, Afgʻoniston, Pokiston, Bangladesh, Indoneziya va boshqa baʼzi mamlakatlarda aholining 80% dan ortigʻi musulmonlardir; bir qancha mamlakatlarda musulmonlar aholining yarmidan 80% igacha tashkil qiladi (Gvineya, Mali, Livan, Chad, Sudan ). Malayziya va Nigeriyada qariyb yarmi, baʼzi bir mamlakatlar ( Gvineya-Bisau, Kamerun, Burkina-faso, Syerra-Leone va boshqa)da musulmonlar ozchilikni tashkil qilsa ham, taʼsir doirasi kuchli. Musulmonlarning soni jihatdan eng yirik davlatlar – Indoneziya, Hindiston, Pokiston va Bangladesh; musulmonlarning anchasi Markaziy Osiyo mamlakatlari, Xitoy, Tailand, Efiopiya, Tanzaniya, Kiprda, Yevropaning ayrim mamlakatlari (Bosniya va Gersegovina, Albaniya, Buyuk Britaniya, GFR, Fransiya va boshqa), Shimoliy va Janubiy Amerika qitʼasi mamlakatlari (AQSH, Kanada, Argentina, Braziliya, Gayana, Surinam, Trinidad va Tobago)da, Avstraliyada, Fiji orollarida yashaydi.

Islom 7-asrda Hijoz (Gʻarbiy Arabiston)da paydo boʻldi. Uning asoschisi Muhammad Sallollohu alayhi vassallamdir.Islom dinining paydo boʻlishi xususida Islom manbalariga asoslangan diniy anʼanada u ilohiy hodisa, insonlarni toʻgʻri yoʻlga solish uchun Alloh tomonidan yuborilgan oxirgi taʼlimot deb uqtiriladi. Islom talqinida dastlab yahudiy va xristianlar ham aynan musulmonlar eʼtiqod qilgan xudoga ishonganlar. Shu xudo, yaʼni Alloh odamlarga paygʻambar-elchilar yuborgan. Ammo insonlar paygʻambarlar taʼlimotini buzganlar. Shuning uchun Alloh insonlarga oxirgi rasul etib Muhammadni tanladi, unga oʻzining kalomi – Qurʼon nozil qildi. Muhammad oldin oʻz hamshaharlarini, soʻng barcha arablarni koʻplab qabila xudolariga sigʻinishdan voz kechish va yagona xudo – Allohga eʼtiqod qilish, solih hayot kechirish, u dunyoda jannatga tushish uchun bu dunyoda ezgu ishlar qilishga daʼvat etdi. Qurʼonga koʻra, arablar va yahudiylarning umumiy bobokaloni Ibrohim ( a.s) Allohga birinchi boʻlib imon keltirgan. Demak, Islom batamom yangi eʼtiqod emas, balki Ibrohim (a.s) ga nozil bo‘lgan dinidir.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Muhammadga, 40 yoshida(milodiy 610-yil) vahiy (ilohiy koʻrsatma) kelishni boshladi. Ammo, bir necha nufuzli yaqin qarindoshlarini hisobga olmaganda, Makkaning koʻpchilik aholisi, ayniqsa, quraysh qabilasining zodagonlari uning targʻibotlariga ochiqdan-ochiq qarshi chiqdilar. Muhammadni yolg‘onchiga chiqarib judda katta zulm ko‘rsatildi. Dastlab bir guruh musulmonlar Habashistonga hijrat qilishdi, Yasribdagi banu Avs va banu Xazraj qabilalarining vakillari 622-yimda musulmon jamoasini oʻziga qabul qilish, Muhammadni payg‘ambar va Allohni yagona deb tan olishdi. Hijrat nomini olgan bu voqea Islom tarixida burilish yasadi. Koʻchib oʻtgan kishilar muxojirlar (koʻchib kelganlar), Madinada Islomni qabul qilganlar ansorlar (tarafdorlar) deb ataldilar. Madina va Makka oʻrtasida boshlangan kurash 8 yil davom etdi (qarang Badr jangi, Uxud jangi, Xandaq jangi va boshqa). 628-yilda Makka zodagonlari Muhammad bilan kelishishga majbur boʻldilar (qarang Hudaybiya sulhi). 630-yilda musulmonlar qoʻshini hech qanday qarshiliksiz Makkaga kirib bordi. Makka aholisi yoppasiga Islom dinini qabul qildi va Muhammadni Allohning elchisi (rasuli) deb eʼtirof etdi. Ana shundan boshlab Makka Islom dini markaziga, Kaʼba musulmonlarning muqaddas ziyoratgohiga aylangan. Muhammad vafot etgan 632-yilda Arabiston yarim oroli toʻla birlashtirilgan, uning aksariyat aholisi Islom dinini qabul qilgan edi. Arabistonning siyosiy, iqtisodiy, etnik va madaniy jihatlardan birlashishida Islom dini muhim omil boʻlib xizmat qildi.

Muhammad vafotidan soʻng Abu Bakr, Umar ibn Xattob, Usmon Ibn Affon, Ali ibn Abu Tolib paygʻambarning oʻrinbosari (xalifa) sifatida hukmronlik qildilar. Ular va ulardan keyingi xalifalar 7–8 asrlarda Iroq, Falastin, Suriya, Eron, Movarounnahr, Misr, Shimoliy Afrika, Pireney yarim oroli, Shimoliy Hindistonni fath qilishdi. Bir asrdan kamroq vaqt davomida Shimoliy Xitoydan Ispaniyagacha, Kavkazortidan Hind okeanigacha boʻlgan katta hududni zabt etdilar va Islom dinini yoydilar (qarang Arab xalifaligi).

Islomning muqaddas kitobi Qurʼondir. Musulmonchilikda bu kitobning butun mazmuni Allohning vahiy qilingan soʻzi deb tushuniladi. Islomning aqidalari, eʼtiqod talablari, huquqiy va axloqiy meʼyorlari, cheklash va ta’qiqlari Qurʼon bilan birga uning tafsirlarida, hadis toʻplamlari va shariat qoʻllanmalarida, shuningdek, 8–12-asrlarda vujudga kelgan ilohiyot adabiyotlarida oʻz ifodasini topgan.

Islomning asosiy aqidasi – *Allohdan boshqa iloh yoʻq va Muhammad uning rasuli*. Islom ilohiyotining ilk shakli – kalom boʻlib, 8-asrda Arab xalifaligida vujudga kelgan. Mutakallimlar Islom dini aqidalarini ishlab chiqqanlar.

Islom dini 5 *asos* yoki *ustun* (arkon ad-din al-islomiy)ga ega:

1) Kalimai shahodat;
2) Namoz oʻqish;
3) Roʻza tutish;
4) Zakot berish;
5) imkoniyat topilsa haj qilish.
Shulardan birinchisi imon va qolganlari ibodat deb eʼtirof etilgan. Imon 7 aqidani – Allohga, uning farishtalariga, muqaddas kitoblariga, paygʻambarlariga, oxirat kuniga, taqdir (yaxshilik va yomonlik Allohning irodasi bilan boʻlishi)ga va oʻlgandan keyin tirilishga ishonishni oʻz ichiga oladi. Islomda roʻza hayiti, qurbonlik va qurbon hayiti, aqiqa, mavlid kabi oʻziga xos diniy marosim va bayramlar tarkib topgan. Bundan tashqari, mahalliy xalqlarda Islomgacha mavjud boʻlgan urf-odatlar, jumladan, fol ochirish, dam soldirish, aziz-avliyolarga, muqaddas joylarga sigʻinish ham Islom marosimchiligiga moslashib ketgan. Bu narsa, ayniqsa, Markaziy Osiyo musulmonlari orasida hali hanuz saqlanib qolgan. Aslida, Islom aqidasiga koʻra fol ochish va fol ochdirish harom qilingan, yaʼni taʼqiqlangan.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islomda ilk davrdan paydo boʻlgan eng birinchi yirik muammo – oliy hokimiyatni egallashga paygʻambardan keyin kim haqliroq, degan masala boʻldi. Ali tarafdorlari *shia* nomini olib, Islomda birinchi boʻlinishni boshlab berdilar. Uchinchi xalifa Usmon aynan shu boʻlinishning qurboni sifatida jon taslim qildi. Ikki taraf – sunniylik va shialik oʻrtasidagi kurash asnosida xorijiylar deb atalgan uchinchi yoʻnalish ham paydo boʻldi. Ammo Islom tarixi uzra sunniylik asosiy yoʻnalish boʻlib keldi. Oʻrta asrlarda hukmronlik qilgan abbosiylar, saljuqiylar, ayyubiylar, mamluklar, usmonli turklar, temuriylar sulolalari sunniylikda edilar. Hozirgu kunda ham sunniylar musulmonlarning mutlaq koʻpchiligi (93%)ni tashkil etadi. Birdan-bir davlat – Eronda shialik rasmiy diniy yoʻnalish sifatida qabul qilingan. Iroq, Livan, Shimoliy Yaman, Ozarbayjon va Afgʻonistonda shialarning yirik jamoalari mavjud. Ummon va Shimoliy Afrikada xorijiylarning baʼzi toifalari saqlanib qolgan. Musulmon huquqshunosligi – fiqhda 4 sunniy (hanafiylik, shofiʼiylik, molikiylik, hanbaliylik) va 1 shia (jafariylik) mazhablari shakllangan. Mazhablar diniy firqalardan farq qiladi. Firqalar, asosan, geografik va iqlimiy omillar hamda Islomni qabul qilgan xalqlarning oldingi madaniyati, anʼanalari va diniy tasavvurlari taʼsirida vujudga kelgan. Ularning aksariyati shia yoʻnalishiga mansub boʻlib, eng yiriklari – imomiylar, ismoiliylar va zaydiylardir. Islomda ilk davrlardan shariat (barcha toʻla rioya kdpishi kerak boʻlgan qonunchilik) bilan tariqat (faqat ayrimlar Alloh xayrixohligiga muyassar boʻlishi mumkinligi) yonma-yon rivojlanib kelgan. Tariqat asoschilari – murshidlarning *valineʼmati* asrlar osha hozirgi avlodgacha yetib keladi, degan tushuncha bor. 8–9-asrlarda Islomda diniy-falsafiy oqim – tasavvuf paydo boʻldi. Sharqda eng mashhur boʻlgan tasavvuf tariqatlari – naqshbandiylik, qodiriylar, shoziliylardir.

Islom dinining muhim xususiyatlaridan biri – uni qabul qilgan xalqlar vakillari uchun Islom aqidalarini ishlab chiqishda ishtirok etish imkoniyatini berganidadir. U oʻziga xos 3 taraqqiyot bosqichi yoki davrni oʻtadi. Birinchisini, shartli ravishda, Qurʼon davri deb atash mumkin. Qurʼoni karimda oʻz aksini topgan Arabiston aholisining diniy ongi darajasini ifoda etuvchi diniy-siyosiy va ijtimoiy qarashlar, huquqiy va axloqiy mezonlar butun musulmon olami uchun hozirgacha shak-shubhasiz umumiy qadriyat hisoblanadi. Deyarli 4 asr davom etgan ikkinchi davr Islomda umumislomiy ahkomlar hukmronligi ostida turli fikrlar yoʻl qoʻyilgani bilan ajralib turadi. Islomdagi yoʻnalishlar, mazhablar va firqalar ana shu davrda paydo boʻldi. Musulmonlarning diniy birligi hal qilib boʻlmaydigan muammo boʻlib qoldi. 10–11-asrlarda anʼanaga sodiq sunniylar bilan imomiy shialar, muʼtaziliylar hamda ashʼariylar oʻrtasida munosabatlar, ayniqsa, keskinlashib ketdi. Xalifa Qodir (991 – 1031) anʼanaviy Islomni qonun asosida barcha uchun majburiy boʻlgan davlat dini deb qaror toptirishga urinib koʻrdi. Shu maqsadda anʼanaga sodiq ilohiyotchilar imzolagan *Dinning qodiriy ramzi* eʼlon qilindi. Unda *haq din* deb eʼlon qilingan anʼanaviy diniy taʼlimotning asosiy qoidalari mufassal bayon qilib berildi, undan chetga chiqish jazolashga loyiq eʼtiqodsizlik deb qaraldi. Biroq bu tadbir ham Islomda diniy birlik oʻrnatilishiga olib kelmadi. Gʻoyaviy kurash keyingi asrlarda ham davom etdi. Bu kurashda sunniylar ilohiyotchisi Ibn Taymiya ayniqsa ajralib turdi. U ilk islomni tiklashga, *haq din* asosida diniy birlikni oʻrnatishga astoydil harakat qildi. Islomdagi uchinchi taraqqiyot bosqichi musulmon dunyosi *chekka* oʻlkalarining ahamiyati va oʻrni ortganligi bilan bogʻliqdir. Batamom oʻzga madaniy anʼanalarga ega boʻlgan xalqlar musulmon dunyosining maʼnaviy hayotiga qoʻshilgach, Islomga oʻz diniy-axloqiy tasavvurlari, huquqiy meʼyorlari va odatlarini olib kirdilar. Movarounnahr, Eron, Shimoliy Afrika, Hindiston, Indoneziya kabi yirik tarixiy-madaniy mintaqalarda Islom oʻziga xos xususiyatlar kasb etadi.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islomning rivojlanishiga Movarounnahrda yetishib chiqqan allomalar katta hissa qoʻshdi. Imom Buxoriy kitob holiga keltirgan hadislar toʻplami – *Al-Jomiʼ as-Sahih* Islom dinida Qurʼoni karimdan keyingi ikkinchi manba hisoblanadi. Buxoriy va uning safdoshlari Islom ilohiyotining barcha yoʻnalishlari boʻyicha muhim tadqiqotlar qildilar. Jumladan, Islom nazariyotchiligida yuqori baholanadigan *Ilal ashshariat va Xatm ul-Asliyot* risolasini taʼlif etgan Hakim Termiziy, Islom huquqshunosligini oʻrganishning asosiy qoʻllanmasi hisoblangan *Hidoya*ning muallifi Burhoniddin Margʻinoniy, Islom aqidasi asoslarini muayyan tartibga solgan, kalom ilmida maktab yaratgan Imom Moturidiy (qarang Moturidiylik), buyuk faqih Abu Lays Samarqandiy, musulmon dunyosining eng eʼzozli muxaddislaridan Iso Termiziy, qomusiy ilmlar sohibi, xususan, tafsir, hadis, shariat qonunshunosligida salmoqli asarlar bitgan Zamaxshariy, tasavvufda oʻziga xos iz qoldirgan Ahmad Yassaviy, Bahouddin Naqshband, Mahdumi Aʼzam, Najmiddin Kubro, Soʻfi Olloyor, Xoʻja Ahror, Abduxoliq Gʻijduvoniy va boshqalarni misol qilib keltirish mumkin. Ular musulmon eʼtiqodini xalq dunyoqarashi bilan uygʻunlashtirganliklari tufayli Oʻrta Osiyoda madaniy hayotning adabiyot, meʼmorlik, musiqa kabi sohalarida taraqqiyot yuzaga keldi.

Islom dini musulmon mamlakatlari sanʼatida oʻz izini qoldirdi. Meʼmorlik sohasida bu jarayon yangi imorat turlari (masjid, minora, xonaqoh, Madrasa va boshqa)ning paydo boʻlishiga hamda keng tarqalishiga sabab boʻldi. Islom dini paydo boʻlgan davrda avj olgan butparastlik, suratparastlikni oldini olish maqsadida Muhammad suratkashlikni qattiq taʼqiqlab qoʻygan edi. Shu asosda Islomning yirik mutafakkir huquqshunoslari ham tasviriy sanʼatning bu turini taʼqiqlangan ishlar qatoriga qoʻshganlar. Bundan ular amaliy sanʼat turlari, naqsh, bezak, insondan boshqa hayvon va oʻsimliklar suratini istisno qilishgan. Islomda inson suratini chizish yoki uning haykalini yasashning taqiqlanishiga asosiy sabab – paygʻambar va aziz-avliyolarning rasmlarini chizib yoki haykallarini yasab, ularga sigʻinib ketish xavfining mavjudligi boʻlgan. 15-asrga kelib Alisher Navoiy kabi taraqqiyparvar olim va mutafakkirlar musulmonlar qalbida Allohga boʻlgan imon va eʼtiqod mustahkamlanib, suratparastlikka mutlaqo moyillik qolmaganini eʼtiborga olib, endilikda inson suratini chizishga ruxsat berishlikni lozim deb topganlar. Natijada Behzod, Maxmud Muzahhibga oʻxshash miniatyura sanʼatini rivojlantirgan yetuk musavvirlar yetishib chiqqan, Hirot miniatyura maktabi, Buxoro miniatyura maktabi kabilar rivojlangan. 20–21-asrlarga kelib, Islom dunyosi ulamolarining bu sanʼatga munosabatlariga yana bir karra aniqlik kiritildi: ilohiylashtirish va odamlarning sigʻinishi maqsadida inson rasmini chizish mumkin emasligi eʼtirof etildi. Ammo, fotosuratlar, shuningdek, yosh bolalar uchun yasalgan odam shaklidagi qoʻgʻirchoklar ta’qiq doirasiga kirmaydi. Ulamolarning bergan fatvolariga koʻra, musulmonlarga fahsh va uyat narsalarni ifoda etuvchi rasmlar, but, sanam va ikona tasviridan boshqa tasviriy sanʼat turlari taqiqlanmaydi. Islomning musiqaga munosabati haqida Diniy musiqa maqolasiga qarang

Musulmon Sharqi 8– 11-asrlarda taraqqiyotda Gʻarbdan oldinda edi: gʻarb olimlari musulmon faylasuflari va tabiblaridan saboq olishgan; gʻarb savdogari Islom dunyosidagi savdoning koʻlamiga havas bilan qaragan; sharq tovarlari gʻarbda zeb-ziynat mollari hisoblangan. Sharq shaharlarining boyligi va hashamati gʻarb uchun afsonadek tuyulgan. Bularning barchasida asosiy mafkura vazifasini bajargan Islomning ijobiy xizmati buyuk, albatta. Ammo 12–13-asrlardan keyin musulmon dunyosi dastlab turgʻunlik, soʻng tanazzulga yuz tuta boshladi. Baʼzilar konservativ (qotib qolgan) din sifatida Islom taraqqiyotga toʻsiq boʻldi, deya unga katta ayb qoʻymoqchi boʻladilar. Aslida soʻnggi oʻrta asrlarda yuz bergan musulmon dunyosining tushkunligi juda murakkab ijtimoiy-iqtisodiy omillar bilan bogʻliq boʻlib, oʻsha davrdagi Islomning oʻzi ana shu tushkunlikning muayyan shaklidagi ifodasi edi.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"19-asr boshidan 20-asrning 2-yarmigacha oʻtgan bir yarim asrlik davr Islomning rivojlanishida muhim burilish bosqichi boʻldi. Sharq mamlakatlarining ijtimoiy-iqtisodiy tuzilishidagi oʻzgarishlar yangi sinf – milliy burjuaziyaning vujudga kelishi, milliy ozodlik qarakatining avj olishi – bularning hammasi Islomning jamiyatdagi mavqeiga boʻlgan qarashlarda ham, ijtimoiy hayotdagi yangiliklarni Islom nuqtai nazaridan baholashda ham oʻzgarishlar yasadi. Islom diniy-falsafiy va huquqiy meʼyorlarining yangi tarixiy sharoitga moslashish jarayoni 19-asr oʻrtalaridan boshlanib, hozirgacha davom etmoqda. Bu jarayonni koʻpgina tadqiqotchilar *Islom islohotchiligi* deb ataydilar, u xristian reformatsiyasidan tubdan farq qiladi. Bu tafovut, birinchidan, shundan iboratki, mazkur jarayonlar turli davrlarda, turlicha muayyan tarixiy sharoitlarda roʻy berdi. Ikkinchidan, *Islom islohotchiligi* dunyoviy hayotning turli jihatlarini diniy nuqtai nazardan qayta baholashda namoyon boʻldi va sof ilohiyotga doir masalalarga daxli boʻlmadi. Uchinchidan, Islomda xristianlarnikiga oʻxshash cherkov bilan ruhoniylarni bogʻlab turuvchi tizim boʻlmaganidan Islomdagi islohotlar xususiyatiga jiddiy taʼsir qildi.

Oʻrta asrlarda tarkib topgan musulmon sudlov tizimida katta oʻzgarishlar yuz berdi. Musulmon huquqi tizimining oʻzi ham muayyan darajada oʻzgardi: shariat sudlari huquqi asta-sekin cheklana bordi; 19-asr oʻrtalariga kelib, Usmoniylar imperiyasi hududida shariat sudlari va dunyoviy sudlarning vakolati butunlay chegaralab qoʻyildi. Bir qancha mamlakatlarda shariatda koʻzda tutilmaydigan jinoyat kodekslari va boshqa huquqiy hujjatlar joriy qilindi. Misrda Muhammad Alining islohotlari va usmoniylar imperiyasidagi tanzimat siyosati (islohotlar) tufayli Islomning ijtimoiy hayotdagi mavqeida muayyan oʻzgarishlar roʻy berdi.

Ijtimoiy-iqtisodiy rivojlanish talablari musulmon ilohiyotchilari va huquqshunoslarini Islomning bir qancha anʼanaviy qoidalarini yangicha talqin etishga majbur eta boshladi. Biroq, bu jarayon oson kechmadi va uzoqqa choʻzilib ketdi. Bu, jumladan, musulmon mamlakatlarida bank tizimini yaratish joizmi (yoki gunohmi) degan masala yuzasidan boshlangan munozarada oʻz aksini topdi. 1899-yilda mufti Muhammad Abdu bank omonatlari va ulardan foiz olish sudxoʻrlikka kirmaydi, binobarin, u man qilingan ribo hisoblanmaydi, degan fatvo chiqardi. Bu fatvo mavjud moliya tizimini milliy sarmoyadorlar manfaatiga moslashtirdi. Musulmon mamlakatlarida tadbirkorlikning avj olishi shariat qoidalarini ham, musulmonchilikdagi boshqa anʼanaviy tamoyillarni ham yangicha talqin qilishga olib keldi. Ijtimoiy ong sohasida roʻy bergan oʻzgarish juda muhim rol oʻynadi. Bu, avvalo, milliy oʻzini anglash jarayoniga taalluqlidir. Shu jarayon davomida Islomning barcha musulmonlarning birligi toʻgʻrisidagi anʼanaviy qoidasi yangicha maʼno kasb etdi. Jamoliddin al-Afgʻoniy musulmonlarning birdamligi gʻoyasini koʻtarib chiqdi. M. Abdu, J. Afgʻoniy, Rashid Rizo va boshqaning gʻoyalari milliy ozodlik harakatlariga turtki bulib koʻpchilik musulmon davlatlarining siyosiy mustaqilligiga erishuvida ijobiy rol oʻynadi. Ayni vaqtda Islom birdamligi gʻoyasiga asoslangan xalqaro Islom harakati shakllana boshladi: 1926-yilda birinchi xalqaro musulmon tashkiloti – Islom olami kongressi (Muʼtamar al-alam al-islomi) tashkil qilindi. Shuningdek, Islomning goʻyo Muhammad zamonidagi *asl* tamoyillariga qaytishga daʼvat etishga turli fundamentalistik oqimlar (qarang Vahobbiylik) va ularning tarkibida oʻz gʻoyalari uchun kurashda terror usuliga tayanuvchi guruhlar, ekstremistik toʻdalar paydo boʻldi. 20-asrning 2-yarmida jamiyatda ijtimoiy adolat oʻrnatish masalasida ham Islom omilidan foydalanishga qaratilgan urinishlar sodir boʻldi (Eron islom inqilobi, Liviya Jamohiriyasi va boshqa).",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Bir qator mamlakatlar (MAP, Kyvayt, Saudiya Arabistoni, Eron, Pokiston, Afgʻoniston va sh. k.)da Islom davlat dini (yoki rasmiy din) sifatida tan olingan. Ayrim mamlakatlarda *Islom* soʻzi davlatning rasmiy nomi tarkibiga kiritilgan: Eron Islom respublikasi, Pokiston Islom respublikasi, Afgoniston Islom respublikasi, Mavritaniya Islom respublikasi va boshqa Osiyo, Afrika qitʼasidagi baʼzi mamlakatlarda Islomning tarqalishiga musulmon partiyalari taʼsir qilmoqda, ular koʻpincha siyosatda muhim rol oʻynamoqda. Erondagi Islom respublikasi partiyasi, Indoneziyadagi Birlik va taraqqiyot partiyasi, Malayziyadagi Panmalayziya islom partiyasi, Hindiston va Pokiston Jamoati islom partiyasi bunga misol boʻla oladi. Bir qancha mamlakatlarda diniy-siyosiy tashkilotlar (shu jumladan, qonundan tashqaridagi tashkilotlar – *Musulmon birodarlar*, Islom ozodligi partiyasi) tarqalgan, koʻpgina diniy bilim yurtlari (qorilik maktablari, Madrasa, musulmon universitetlari), islom jamiyatlari, missionerlik tashkilotlari, tijorat korxonalari (islom banklari, sugʻurta kompaniyalari) ishlab turibdi.

Musulmon sud ishlarini olib borish tizimi saqlanib qolmoqda. 19-asrning 70–80-yillaridagi shariatning ilgari amaliyotda bekor qilingan baʼzi bir qoidalarini tiklashga urinib kurildi (masalanPokistonda; Sudanda prezident J. Nimeyri davrida, arab monarxiyalarida jinoiy ishlar uchun tan jazolari berish).

Oʻtgan asr 70-yillarining oxiri – 80-yillarining boshida xalqaro ishlarda hukumat darajasida yoki nohukumat darajasida ish olib boruvchi xalqaro musulmon tashkilotlari muayyan mavqega ega boʻla boshladi. Bunday tashkilotlardan eng nufuzlisi Islom konferensiyasi tashkiloti (Munazzamat al-muʼtamar al-islomi) boʻlib, u 1969-yilda tuzilgan, unga 55 mamlakat (Oʻzbekiston Respublikasi 1996-yildan) aʼzo. Xalqaro nohukumat musulmon tashkilotlari orasida Islom olami uyushmasi, Islom olami kongressi, Islom olami tashkiloti, Yevropa islom kengashi, AQSH Oliy islom kengashi va boshqani koʻrsatish mumkin. Ular, asosan, Islomni targʻib qilish va yoyish, diniy arboblarning xalqaro uchrashuvini tashkil qilish, turli mamlakatlardagi Islom jamoalariga yordam berish bilan shugʻullanadi.

Islom Turkiston mustamlakachilik davrini boshdan kechirgan paytda, ayniqsa, shoʻrolar davrida turli taʼqib va har tomonlama cheklashlarga duch keldi, ulamolarning taqdiri ayanchli boʻldi. Islomga oid bebaho kitoblar yoʻqotildi, muborak yodgorlik va qadamjolar oyoqosti qilindi, din peshvolari eng xavfli yov, muxolif sifatida mahv etildi. Oʻzbekiston mustaqillikka erishganidan keyin, Islom dini hayotda munosib oʻrnini egallay boshladi. Musulmonlarning diniy ibodat va marosimlarni ado etishlari uchun sharoit yaratib berildi. Qurʼoni karim 2 marta oʻzbek tilida chop etildi (1992, 2001 yillar), hadis toʻplamlarining tarjimasi, Islom ulamolarining yuzlarcha kitoblari yana xalqqa yetkazildi. Hozirgi paytda Qurʼoni Karimning oʻzbek tilidagi beshta jumladan, Shayx Muhammad Sodiq Muhammad Yusuf (*Tafsiri Hilol*, 1992-2005), Oltinxon Toʻra, Alouddin Mansur (*Qurʼoni karim*ning oʻzbekcha izohli tarjimasi (Toshkent, 1991)), Shayx Abdulaziz Mansur (*Qurʼoni karim maʼnolarining tarjima va tafsiri*, 2004), muftiy Usmonxon Alimov (*Tafsiri Irfon*) kabi oʻzbek olimlari tomonidan tayyorlangan maʼnolar tarjimalari va tafsirlari nashr etilgan. Islom tarixi manbalari va marosimlarini har tomonlama, ilmiy, xolisona oʻrganishga kirishildi, mutaxassis kadrlar tayyorlash yoʻlga qoʻyildi. Shu maqsadda Toshkent davlat sharqshunoslik institutida islomshunoslik kafedrasi ochildi (1992), deyarli barcha viloyatlarda diniy oʻquv yurtlari faoliyat koʻrsata boshladi, Toshkent Islom universiteti tashkil qilindi (1999), uning tarkibida Islomshunoslik ilmiy tadqiqot markazi ishlab turibdi.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom tarixi, manbalari, aqidalari, marosimlari, Qurʼoni karim, Muhammad hayoti va faoliyati, paygʻambar hadislarini oʻrganish, tadqiq qilish Islomshunoslik fanining asosiy vazifasi hisoblanadi. Bu sohadagi tadqiqotlar Islom tarqalgan mamlakatlarda, xususan, Movarounnahrda Islom va uning yozma manbalari paydo boʻlgandan buyon olib boriladi. Musulmon dini tarixi va Qurʼonni oʻrganish Amerikada (G. Grunebaum, X. Gibb, M. Vott va boshqa), Yevropada (I. Goldsiyer, L. Kaetani, A. Masse, R. Sharl), jumladan, Rossiyada (A. E. Shmidt, V. V. Bartold, I. A. Krachkovskiy va boshqa) 19-asr oʻrtalaridan keng tus oldi. Shoʻrolar davridagi tadqiqotlarda Islomga, asosan, yagona marksistik mafkura nuqtai nazaridan kelib chiqib yondoshildi. Islomning insoniyat tamadduni tarixidagi ahamiyatini ommaga tushuntirishda, Turon zaminida yetishib chiqib islomiy ilmlar xazinasini boyitgan ulugʻ allomalarning merosini xalqqa yetkazishda Eshon Boboxon Abdumajidxon oʻgʻli, mufti Ziyovuddinxon ibn Eshon Boboxon, Alixontoʻra Sogʻuniy, marhum shayxlar Ismoil Maxdum (1893 – 1976), Abdugʻani Abdullo (1928–1999) va Yusufxon Shokirov (1926–2000)larning xizmati kattadir. 20-asr oxirlaridan boshlab mamlakatimizda Islom boʻyicha obʼyektiv tadqiqotlar olib borish imkoniyati tugʻildi. Oʻzbekistonlik olimlar Islom manbashunosligi, Qurʼon tarjimasi va tafsiri, Islomdagi mazhablar, oqimlar, mashhur muhaddis va faqihlar, xalqaro Islom tashkilotlari, diniy bagʻrikenglik, diniy ekstremizmga oid bir qancha asarlar yozdilar (marhum M. A. Usmonov, shuningdek, N. Ibrohimov, H. Karomatov, A. Mansurov, A. Hasanov, Z. Husniddinov, Z. Islomov, U. Uvatov, B. Eshonjonov, B. Abduhalimov, A. Juzjoniy, A. Moʻminov, A. Azimov, R. Obidov va boshqalar).",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Islom dini tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Amallar Yakunlandi ✔",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Qur‘oni karim tarixi📝"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/6",
'caption'=>"Qurʼon (arabcha: القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra, Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), „Furqon“ (haq bilan botilning orasini ayiruvchi), „Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), „Hudo“ (hidoyat), „Muborak“ (barakotli), „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), „Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), „Bashir“ (bashorat beruvchi), „Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.",
'parse_mode'=>'html',
]);
}
if($text == "☪Qur‘oni karim tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom tarixiga oid manbalarda keltirilishicha, Qurʼon nozil boʻlishi milodiy 610-yil boshlangan. Muhammad paygʻambar 40 yoshda Makka shahri yaqinidagi Hiro gʻorida chuqur tafakkurga berilib oʻtirgan bir paytda Jabroil farishta „Iqroʼ“ („Oʻqi“) deb boshlanuvchi „Alaq“ surasining avvalgi 5 oyatini keltirdi. Bu jarayon Makkada 13 yil, Madinada 10 yil, hammasi boʻlib 23 yil davom etgan. Qurʼonning nozil qilinishi islom aqidasi boʻyicha ramazon oyining 27-kuniga oʻtar kechasi yuz bergan. Shuning uchun ham bu oy muqaddas hisoblanib, roʻza tutilgan kunning 27-kechasi laylatul-qadr, yaʼni qadrli, ilohiy qudrat namoyon boʻladigan, bandalarning bir yillik taqdiri hal qilinadigan (qadr — taqdir, oʻlchov) tabarruk kecha deb ulugʻlanadi.

Qurʼonning boʻlimlari sura deyiladi, uni shartli ravishda bob bilan taqqoslash mumkin. Har sura oyatlarga boʻlingan. Qurʼon 114 sura, 6236 oyatdan iborat. Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar, voqealar yohud asosiy qahramon nomi bilan atalgan. Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arabcha: juz, forscha: pora)ga boʻlingan. Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar — „Makka suralari“ (610—622 yillar, 86 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 28 sura) ga ajratiladi.

Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Payg‘ambarlar tarixi📝"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/7",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Payg‘ambarlar tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Paygʻambar (fors. — xabar keltiruvchi) — iudaizm, xristianlik va islomda xudodan vahiy olgan va uni odamlarga yetkazadigan shaxs. Xudo bilan uning bandalari oʻrtasidagi vositachi, xudoning yerdagi vakili, elchisi hisoblanadi. Paygʻambarlar kelajakni biladigan, diniy va tarixiy voqealarni, biror odamning taqdirini oldindan aytib beradigan shaxs sifatida tasavvur qilinadi. Islomga koʻra, Paygʻambarlar bilan Alloh oʻrtasida elchilik qiluvchi farishta — Jabroildir. Baʼzida Alloh Paygʻambarga bevosita vahiy yuborishi, u bilan gaplashishi ham mumkin. Paygʻambarlarning adadi Qurʼon, hadis va tarixiy kitoblarda qatʼiy koʻrsatilmagan. Baʼzi manbalarda ular 124 mingta deyilgan. Qurʼonda Odam, Idris, Nuh, Hud, Solih, Ibrohim, Ismoil, Ishoq, Yaʼqub, Yusuf, Lut, Ayyub, Zulkifl, Yunus, Muso, Horun, Shuayb, Ilyos, Alyasa, Dovud, Sulaymon, Zakariyo, Yahyo, Iso (as) va Muhammad (sav) kabi Paygʻambarlarning nomi zikr etilgan. Aksariyat Paygʻambarlarning nomi Tavrot va Injilda ham qayd etilgan. Paygʻambarlarning birinchisi Odam (as), oxirgisi Muhammad (sav) sanaladi. Paygʻambarlar har qanday gunohlardan pok hisoblanadilar.

Qur'onda nomi zikr etilgan payg`ambarlar:
1 Odam آدم
2 Idris (Enoch) ادريس
3 Nuh (Noah) نوح
4 Hud (Heber) هود
5 Solih (Shelah) صالح
6 Ibrohim (Abraham) ابراهيم
7 Lut (Lot) لوط
8 Ismoil (Ishmael) اسماعيل
9 Is'hoq (Isaac) اسحاق
10 Yaʼqub (Jacob) يعقوب
11 Yusuf (Joseph) يوسف
12 Ayyub (Job) أيوب
13 Shuayb (Jethro) شعيب
14 Muso (Moses) موسى
15 Horun (Aaron) هارون
16 Zulkifl (possibly Ezekiel) ذو الكفل
17 Dovud (David) داود
18 Sulaymon (Solomon) سليمان
19 Ilyos (Elijah) إلياس
20 Alyasa (Elisha) اليسع
21 Yunus (Jonah) يونس
22 Zakariyo (Zacharias) زكريا
23 Yahyo (John the Baptist) يحيى
24 Iso (Jesus) عيسى
25 Muhammad محمد",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}

if($text == "☪Muhammad (s.a.v)👳‍♂"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Muhammad, Muhammad ibn Abdulloh (570/571, Makka — 632, Madina) — islom dini va birinchi musulmonlar jamoasi asoschisi. Musulmonlar eʼtiqodiga koʻra, Allohning oxirgi paygʻambari va uning elchisi. Shu maʼnoda uni Rasululloh, Rasuli Akram deb atash odat tusiga kirgan. Baʼzi diniy manbalarda Muhammadning 99 nomi keltiriladi. Islom taʼlimotiga koʻra, Muhammad nomini aytgan yoki eshitgan kishi `sallalohu alayhi vasallam` (s.a.v.) yoki `alayhissalom` (a.s.) deb salovat aytib qoʻyish vojib hisoblanadi. Muhammad orqali odamlarga Qurʼon nozil qilingan.

Quraysh qabilasining hoshimiylar urugʻiga mansub, uncha boy boʻlmagan, lekin Makka zodagonlariga yaqin oilada tugʻilgan. Muhammadning bolalik va oʻsmirlik yillari haqidagi maʼlumotlar juda kam. Muhammad goʻdakligidayoq yetim qolgan; tugʻilmasidan avval otasi Abdulloh, 6 yoshligida esa — onasi Omina vafot etgan. Muhammadni oʻz tarbiyasiga olgan bobosi Abdulmuttalib ham koʻp oʻtmay olamdan oʻtadi. Yetim bolani tarbiya qilishni amakisi Abu Tolib oʻz zimmasiga oladi. 12 yoshida Muhammad bir muddat Abu Tolibning podasini boqadi, keyin tijorat ishlariga jalb qilinadi. Abu Tolib Muhammadni 21 yoshida Huvaylid ibn Asʼadning qizi, badavlat beva ayol Xadicha xonadoniga dastyorlikka beradi. Xadichaning savdo ishlari bilan shugʻullangan Muhammad Suriyaga safar qiladi, xususan, Halab va Damashq shaharlariga boradi. Muhammad 25 yoshida (595 yil) 40 yoshlarga borib qolgan Xadichaga uylanadi. Muhammaddan Xadicha 3 oʻgʻil (Qosim, Tohir, Tayyib) va 4 qiz (Ruqiya, Zaynab, Ummu Kulsum, Fotima) koʻrgan. Ogʻillari goʻdakligidayoq vafot etgan. Qizlaridan Fotimagina Muhammad naslini davom ettirgan. Xadicha vafotidan soʻng Muhammad bir necha bor uylangan (lekin, Oyshadan boshqa bokira xotin olmagan), ulardan farzand koʻrmagan. Faqat joriyasi Moriyadan Ibrohim ismli oʻgʻli boʻlgan. U ham juda yoshligida olamdan oʻtgan.

Muhammad 40 yoshga toʻlganida oʻzini boshqacha seza boshlaydi. Yolgʻizlikni qoʻmsab, Makka yonidagi Hiro togʻida joylashgan gʻorga borib ibodat bilan mashgʻul boʻlar, oʻyga tolardi. Taxminan 610-yilda Muhammad Makkada oʻzining Allohdan vahiy olayotganligini eʼlon qiladi. Buni birinchilardan boʻlib Xadicha, Muhammadning amakivachchasi Ali ibn Abu Tolib, hamda asrandi oʻgʻli Zayd ibn Horisa eʼtirof etib imon keltirishgan. Koʻp oʻtmay, Makkaning eng nufuzli savdogarlaridan Abu Bakr, Zubayr, Talha, Saʼd ibn Abu Vaqqos, Abdurahmon ibn Avf va Usmon ibn Affon Muhammadni chin paygʻambar deb tan olishgan. Muhammad izdoshlari jamoasi dastlabki paytlarda 50 kishidan oshmagan. Makkaning asosiy aholisi, ayniqsa, nufuzli qurayshliylar esa Muhammad taʼlimotini ochiqdan-ochiq dushmanlik bilan qarshi olgan. Buning natijasida Muhammad tarafdorlaridan 11 xonadon Habashiston (hozirgi Efiopiya) ga koʻchib ketgan. Muhammad jamoasiga jasur jangchilar sifatida tanilgan Hamza va Umar ibn Xattobning qoʻshilishi jamoaning mavqeini oshirdi. Ayni vaqtda quraysh zodagonlarining Muhammad va uning tarafdorlariga dushmanligi yanada kuchaydi. 620 yilda Xadichaning, soʻngra Abu Tolibning vafotidan soʻng Makkada vaziyat yomonlashadi, Muhammad muayyan xatar ostida qoladi. Har yilgi anʼanaviy Makka ziyoratiga kelgan yasriblik Avs va Hazraj qabilalarining vakillari Muhammad bilan uchrashib, sodiqlik bildirishadi va yordam qilishga vaʼda berishadi, Muhammadni Yasribga koʻchib borishga daʼvat qilishadi. Avval Muhammadning izdoshlari (asʼhoblar) oʻz oilalari bilan quraysh zodagonlaridan maxfiy ravishda guruh-guruh boʻlib koʻchadi. Oxirida Muhamadning oʻzi Abu Bakr bilan joʻnab ketadi. 622 yildada yuz bergan bu koʻchish payti (arab, hijrat)dan musulmonlar erasi — hijriy yil hisobi boshlanadi. Yasrib esa Madina an-Nabiy (`Paygʻambar shahri`) yoki qisqacha, Madina deb ataladigan boʻldi.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Muhammad (s.a.v)👳‍♂"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Madinada birinchi masjid qurildi, islom arkonlari ishlab chiqila boshlandi, Kaʼba qibla qilib belgilandi. Jamoani jipslashtirish va uni kengaytirish uchun makkalik mushriklarga qarshi kurashish zarur edi. Makkaliklarga qarshi uyushtirilgan iqtisodiy urush ular farovonligining asosiy manbai boʻlgan savdo karvonlari ishini chippakka chiqardi. 624 yilda Badr quduqlari oldida Badr jangi, 625 yilda Uhud togʻi etagida Uhud janglari boʻldi. 626 yilda makkaliklar madinaliklarga uzil-kesil zarba berish maqsadida yirik harbiy safarga otlanishdi. Muhammad Madinani uzoq qamal sharoitiga tayyorladi, shahar atrofiga chuqur xandaqlar qazildi va u yerlarga kamonchi oʻqchilar joylashtirildi. Kutilmagandagi izgʻirin, kuchli shamollar qamal qiluvchilarni toliqtirdi, ular orasida nizolar boshlandi. Natijada Madina qamali bekor qilindi, bu gʻalaba Madina jamoasini yanada jipslashtirish bilan birga, unga yangi-yangi badaviy qabilalarning qoʻshilishiga olib keldi. Hijratning 6-yilida makkalik quraysh zodagonlari mavjud muammolarni kelishuvchilik yoʻli bilan bartaraf etish uchun Muhammad bilan tengma-teng muzokara olib borishga majbur boʻlishdi (q. Xudaybiya bitimi). Madinaga qarshi kurashning yetakchilaridan biri boʻlgan Abu Sufyon Muhammad tarafiga oʻtdi. 630 yilda Makka Muhammadga jangsiz taslim boʻldi, makkaliklar Muhammad jamoalariga qoʻshildi. 631 yildda koʻp qabilalar Muhammadga boʻysundi va islomni qabul qildi. Hijratning 10-yili (632 yil martida) Muhammad oʻz oila aʼzolarini olib, Madina atroflaridagi 100 mingdan ortiq kishi bilan Makkaga birinchi va oxirgi marta ziyorat (haj)ga bordi. Bu vidolashuv haji boʻlgan. Mana shu ziyorat Makkaning islom dini markazi sifatidagi mavqeini uzil-kesil hal etdi. Oʻshandan buyon oʻtgan barcha asrlar davomida musulmonlar bu shaharni ziyorat qiladi. Haj safaridan 81 kun keyin uzoq davom etmagan kasallikdan soʻng Muhammad Madinada vafot etdi. Muhammadni oʻz hujrasiga dafn qilishgan, maqbarasi keyinchalik u yerda qurilgan katta masjid ichida qolgan, musulmonlarning ziyoratgohiga aylantirilgan.

Muhammadning hayoti va tarjimai holi siyratda, uning soʻzlari va qilgan ishlari haqidagi rivoyatlar hadislarda bayon etilgan. Islom taʼlimotida Muhammad komil inson sifatida taʼriflanadi. Sunnat paygʻambarning hayoti barcha musulmonlar uchun namuna boʻlishi kerakligi taʼkidlanadi. Islom anʼanasida Muhammad hech qanday gʻayritabiiy, ilohiy xususiyatga ega emasligi, balki hamma kabi oddiy odam, lekin Allohning chin va oxirgi paygʻambari ekanligi qayd etiladi.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "☪Muhammad (s.a.v)👳‍♂"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Muhammadning shaklu-shamoyillari, siyratu-sifatlari, insoniy fazilatlari, boshqa paygʻambarlardan farq etadigan xususiyatlari toʻgʻrisida u bilan birga yurgan, suhbatlaridan bahramand boʻlgan sahobalar hamda nikohida boʻlgan ayollari tomonidan naql qilingan rivoyatlar asosida koʻplab asarlar bitilgan. Ulardan Abu Iso Termiziyning `Shamoili nabaviya`, Muhammad Busiriyning `Qasidai burda`, Abu Jaʼfar Barzanjiyning `Mavlidin-Nabiy`, Muhammad ibn Solihning `Muhammadiya`, Mavlono Muʼinning `Siyari sharif`, Akbarobodiyning `Nodirul-meʼroj`, Sayyid Mahmud Taroziyning `Shirin kalom`, `Nurul kalom`, `Nurulbasar` va boshqa koʻplab mu-alliflarning asarlarini misol qilib keltirish mumkin. Imom Termiziyning `Shamoili Muhammadiyya` kitobi ular ichida qadimiyligi va rivoyatlarining sahihligi bilan ajralib turadi. Unda Muhammadning jismoniy va axloqiy xususiyatlariga batafsil taʼrif berilgan. Maslan, ikki kiftlari oʻrtasida `Muhammadun rasululloh` deya bitilgan muhri nubuvvatlari boʻlgani, soch-soqollarining oqu-qorasi nechta boʻlganidan tortib, kiyim-kechaklari, oyoq kiyimlari, taqqan uzuklari, qilich-qalqonlari, salla-choponlari, yegan va yoqtirgan taomlari, ovqatdan oldin va keyin oʻqigan duolari, suv ichishlari, xushboʻy narsalarni isteʼmol qilishlari, soʻzlashish odoblari, xulq-odoblari, kulish va hazil-mutoyibalari, musiqa va sheʼriyatga munosabatlari, ibodat va riyozatlari, tilovat va munojotlari, yotish-turishlari, tibbiyotga munosabatlari, kundalik tirikchiliklari, nomu laqablari, umrlarining miqdori, xastalik va vafotlari, qoldirgan meroslari va boshqa sifatlari toʻgʻrisida alohida-alohida bob va fasllar orqali bayon etilgan. Jismoniy tuzilishlari toʻgʻrisida jumladan shunday naql qilinadi: `Ul zotning boʻylari unchalik novcha ham, past ham emas, bosh, qoʻl, oyoq va kiftlari yoʻgʻon, yuzlari qizgʻish, koʻzlari katta, oqi juda oq, qorasi oʻta qora, oʻtkir, sochlari quloqlarining yumshoqlarigacha yopib, yelkalariga tegib-tegmay turar, boʻyinlari sochlari orasidan tovlanib, goʻyo kumush koʻzdek koʻrinib turar, terlasalar, marjondek terlaridan muattar hid taralar, biror kishiga qayrilib qaramoqchi boʻlsalar boshlarinigina burib qaramay, balki butun gavdalari bilan oʻgirilib qarar edilar. Old tomonlarini qanday koʻrsalar, orqa tomonlarini ham shunday koʻrar edilar`.",
'parse_mode'=>'html',
'reply_markup'=>$islom,
]);
}
if($text == "🤲Namoz🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/8",
'caption'=>"Siz 《Namoz》 Bo‘limidasiz. 
O‘zingizga Kerakli Bo‘limni Tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$namoz,
]);
}
if($text == "🛐Namoz haqida📝"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/9",
'caption'=>"O‘zingizga Kerakli Bo‘limni Tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namoz Bu.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/10",
'caption'=>"NAMOZ
Oldin ibodat nimaligini bilib olaylik. «Ibodat» soʻzi «toat», «itoat qilish» va «Parvardigorni ulugʻlash» ma‘nolarini oʻzida jamlagan. Shariatda bajarilgani uchun savob bеriladigan va niyatga bogʻliq boʻlgan amal «ibodat» dеyiladi. Alloh taolo amr-farmonlari va Uning Paygʻambari koʻrsatmalarini bajarish, Parvardigor roziligini topish va Unga bandalikni ado etish uchun buyurilgan namoz oʻqish, roʻza tutish, zakot bеrish, haj qilish, duo va zikrlar aytish, yaxshilik va ehsonlar qilish kabi toat va amallar ibodatdir.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namoz Bu.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Ibodatlarning eng asosiysi, eng ulugʻi, eng ahamiyatlisi namozdir. Namoz arabchada «solat» dеyiladi, lugʻatda «yaxshilikka duo» dеgan ma‘noni anglatadi. Shariatda esa talab qilingan shartlar asosida takbir bilan boshlanib, salom bеrish bilan tugaydigan ibodat «namoz» dеyiladi. 

Namoz Isro kеchasida Paygʻambarimiz sollallohu alayhi vasallam hijratlaridan (Yasrib, ya‘ni Madina shahriga koʻchishlaridan) bir yarim yil oldin farz boʻlgan. Bеsh vaqt (bomdod, pеshin, asr, shom, xufton) namozning farzligi Qur‘on, sunnat, ijmo‘ bilan sobit (joriy) boʻlgan.

Namoz balogʻatga еtgan har bir musulmonga farz (majburiy)dir. Namozning farzligini inkor qilgan kishi kofir boʻladi. Namoz – Islom dinining ikkinchi rukni, kalimai shahodatdan kеyingi eng ulugʻ farz sanaladi. Namozni masjidlarda jamoat bilan oʻqishning alohida fazilati va afzalligi bor. 

U musulmon banda Allohning son-sanoqsiz nе‘matlariga shukr kеltirishi uchun shariatga kiritilgan boʻlib, uning diniy, tarbiyaviy, shaxsiy, sihhiy, ijtimoiy va boshqa qator foydalari koʻp. Avvalo, namoz bandaning Alloh bilan bogʻlanish vositasidir. Namozda banda Alloh bilan yolgʻiz qolib, unga munojot qiladi. Shu ibodat yordamida ruhiy, ma‘naviy lazzat oladi. Namoz oʻqish bilan banda oʻzining barcha ishlarini Alloh taologa topshiradi. Shu namozi ila oʻziga omonlik, xotirjamlik va najot tilaydi. 

Ikkinchidan, namoz yutuq va najot yoʻlidir. Namoz xato va gunohlarni yuvishning eng ishonchli yoʻli boʻlib, u doimo oʻz egasiga koʻplab shaxsiy foydalar kеltiradi. Namoz insonni Allohga yaqin qiladi, uning irodasini mustahkamlaydi, bu dunyo matohlaridan oʻzini yuqori tutishga oʻrgatadi va oʻz egasiga mislsiz nafsoniy rohat va ruhiy farogʻat baxsh etadi.

Namoz oʻqiydigan odam gʻaflat uyqusidan uygʻonib, hayotga tеranroq nazar solishni oʻrganadi. U kishiga intizomli boʻlishni, hamma ishlarni tartibli ravishda yoʻlga qoʻyishni, vaqtni tеjash va tartibga solishni oʻrgatadi. Namozxon odam hilm, xotirjamlik, shoshilmaslik, viqorli boʻlish, sabr kabi koʻplab shaxsiy va yuksak insoniy fazilatlarga ega boʻladi. 

Namoz insonning kundalik hayoti uchun har tomonlama zarur amal ekani ilmiy ravishda ham isbotlanmoqda. Namoz oʻzining son-sanoqsiz foydalari bilan inson hayotini hamma sohalarda tartibga solib turuvchi vosita ekani tobora ayon boʻlmoqda. Hozirgi kunda ilmiy yoʻl bilan hayot kеchirish uslubini izlagan moddiy taraqqiy etgan yurtlar aholisining koʻpchiligi namoz tufayli Islomga kirmoqda. Kishining har taraflama pokligini, sogʻligini ta‘minlovchi, uni Alloh bilan, Paygʻambar sollallohu alayhi vasallam bilan, moʻmin birodarlari bilan doimiy aloqada ushlab turuvchi namozning ahamiyatini endi kim ham inkor qila oladi?",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namoz Bu.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom dinida namozdan muhimroq, undan ulugʻroq va ahamiyatliroq boshqa ibodat yoʻq. Qur‘oni Karimning juda koʻp oʻrinlarida insonlar namoz oʻqishga targʻib qilingan, namoz musulmonlikning asosiy bеlgilaridan, Islomning muhim ruknlaridan ekani zikr etilgan. Qur‘oni Karimning oltmish bеsh oyatida namoz kishi iymonining dalili ekani zikr etilib, moʻminlar namozni toʻkis ado etishga, namozlarini muhofaza qilishga buyurilgan. Qolavеrsa, namoz poklik ramzi. Namozxon odamning eng avvalo, qalbi pok boʻladi. Uning nainki qalbi, badani, kiyim-boshi va makoni ham pok boʻladi. Namoz kishining ruhiy, ma‘naviy va jismoniy sogʻligi uchun nihoyatda zarur narsa ekani hozirda hеch kimga sir emas. 

Namoz moʻminga najot va panohdir, dardiga malhamdir. Sahih hadislarda kеltirilishicha, qachon Rasululloh sollallohu alayhi vasallamning boshlariga biror tashvishli ish tushsa, kеchada kuchli shamol boʻlsa, quyosh yoki oy tutilsa, biror hodisa yuz bеrsa, boshpanalari masjid, ibodatlari namoz boʻlib qolardi. 

Namoz ruh ozuqasi, qalb jarohatining shifosi, nafsning jilovidir. Namoz qiynalganlarga yordam, xavfdagilarga omonlik, zaiflarga quvvat, qurolsizlarga qalqondir. Namoz iymonning alomati, qabrni purnur etuvchi ziyo, oxiratda doʻzaxdan panoh boʻluvchi, bandani yomonlik, gunohlardan qaytaruvchi eng yaxshi davodir. Chunki dunyo hayotida namozdan jiddiyroq, muhimroq bir ish, biror vazifa yoʻqdir. Namoz Allohga bandalik qilishning, Unga ishonishning e‘tirofidir. Allohni sеvishning, Uni ehtirom qilishning ifodasidir. Namoz kibr va nafs choponini otib, qullik libosini kiyish kayfiyatidir. Musulmonni gʻayrimuslimdan ayiradigan eng katta alomatdir. Shuning uchun har qanday holatda ham uning tark etilishiga izn bеrilmagan.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}


if($text == "Namozning Farzi.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/11",
'caption'=>"Namozda O‘n Ikkita Farz Amal Bor. Namozdan Tashqarida Oltita Farz Amal Bo‘lib, Ular “Namoz Shartlari”, Namoz Ichidagi Olti Farz Esa “Namoz Ruknlari” Deyiladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Farzi.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Namoz shartlari quyidagilar:

1. Tana pok bo‘lishi (Tahoratsiz bo‘lsa, tahorat olish, junub bo‘lsa, g‘usl qilish).

2. Kiyim pok, avratni berkitadigan bo‘lishi.

3. Namoz o‘qiladigan joy pok bo‘lishi.

4. Namoz vaqti kirishi (Vaqti kirmay turib o‘qilgan namoz farz o‘rniga o‘tmaydi).

5. Namozni qiblaga yuzlanib o‘qish.

6. Namoz o‘qishga niyat qilish.

Namoz ruknlari quyidagilar:

1. Takbiri tahrima (“Allohu akbar” deb namozga kirish).

2. Qiyom (namozda tik turish. Sog‘lom kishi tik turishi farz. Agar bemor bo‘lsa, o‘tirib, bunga ham qodir bo‘lmasa, yonboshlab o‘qish mumkin).

3. Qiroat (namozda Qur’on suralari yoki oyatlarini o‘qish).

4. Ruku’ qilish (ikki qo‘l tirsaklarini bukmasdan tizzalarini ushlagan holda boshni egish. Bunda bel to‘g‘ri qilinishi, bosh bilan bel bir tekisda bo‘lishi kerak).

5. Sajda qilish (peshonani yerga qo‘yish. Bunda ham bel to‘g‘ri bo‘lishi shart).

6. Qa’dai oxir (oxirgi qa’dada tashahhud miqdoricha o‘tirish).

Agar bu amallardan birontasi tark etilsa yoki noto‘g‘ri bajarilsa, namoz buziladi, uni qaytadan o‘qish lozim bo‘ladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Vojiblari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/12",
'caption'=>"Namozning Vojiblari.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Vojiblari.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Farz namozlarining ikki rakatida, vitr, nafl (jumladan, ta’kidlangan sunnat) namozlarining hamma rakatida Fotiha surasini qiroat qilish.

2. Farz namozlarining avvalgi ikki rakatida, vitr, nafl (jumladan, ta’kidlangan sunnat) namozlarining har bir rakatida Fotiha surasidan so‘ng zam sura o‘qish. Zam sura kamida qisqa uch oyat yoki uzun bir oyatdan iborat bo‘ladi.

3. Zam surani Fotihadan keyin o‘qish.

4. Imom namozga o‘tganda ovoz chiqarib o‘qiladigan namozlarni (bomdod, shom, xuftonni) jahriy, ovoz chiqarmay o‘qiladigan namozlarni (peshinni, asrni) maxfiy o‘qishi.

5. Qiyom, ruku’, sajda kabi ruknlarni o‘z o‘rnida, tartib bilan bajarish.

6. Ruku’da, sajdada, qolgan barcha arkonlarda a’zolar taskin topishi, mazkur ruknlarni xotirjamlik bilan bajarish.

7. Sajdada burun bilan peshonaning baravar yerga tegib turishi.

8. Uch, to‘rt rakatli namozlarning ikkinchi rakatida hamda namoz oxiridagi o‘tirishda “Attahiyot” o‘qish.

9. Avvalgi qa’dada tashahhudni o‘qib bo‘lgach, kechiktirmay uchinchi rakatga turish.

10. Namozdagi vojib amallardan birontasi esdan chiqib tark etilsa, sajdai sahv qilish.

11. Namoz oxirida “Assalaamu alaykum va rohmatulloh” deb salom lafzi bilan chiqish. Salom yelkaga to‘la yuzlangandan keyin beriladi.

12. Vitr namozining oxirgi rakatida “Qunut” duosini o‘qish.

13. Ramazon va Qurbon hayiti namozlarining har rakatida uchtadan qo‘shimcha takbir aytish.

Mazkur vojib amallardan birontasini esdan chiqarib tark etgan kishi namoz oxirida sajdai sahv qilishi vojib. Sajdai sahv qilish tartibi bunday: imom oxirgi qa’dada tashahhudni o‘qigandan so‘ng o‘ng tomoniga salom beradi1. Keyin ikki marta sajda qilib, yana tashahhudni, salavotni o‘qiydi. Shundan so‘ng ikki tomonga salom berib namozdan chiqadi.

1 Agar kishi yolg‘iz o‘zi namoz o‘qiyotgan bo‘lsa, tashahhuddan keyin ikki tarafiga salom beradi. Keyin ikki marta sajda qilib, tashahhudni, salavotni o‘qiydi, o‘ng va so‘l tarafga salom berib namozdan chiqadi. Jamoat namozida imom sahv sajdasi qilish uchun faqat o‘ng tomonga salom beradi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Sunnatlar.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/8",
'caption'=>"Quyidagilar Namozning Sunnatlaridir:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Sunnatlar.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Takbiri tahrimada qo‘l barmoqlarini o‘z holida ochiq tutib quloqqa tekkazish (Ayollar takbiri tahrima aytishda qo‘llarini yelka baravarida ko‘taradilar).

2. Iqtido qiluvchi takbiri imom takbiri bilan oldinma-ketin bo‘lishi.

3. Erkaklarning o‘ng kaftlarini chap kaftlari ustiga qo‘yib, ikkisini kindik ostida tutib turishlari (Ayollar o‘ng kaftlarini chap kaftlari ustiga qo‘yib, ko‘kraklari ustida ushlab turadilar).

4. “Allohu akbar” deb takbir aytgandan keyin sanoni maxfiy (ichida) o‘qish.

5. Sanodan keyin “Auvzu”, har rakatda Fotihadan oldin “Bismillaah” aytish (Taavvuz ham, basmala ham maxfiy – ovoz chiqarmay, pichirlab aytiladi).

6. Faqat birinchi rakatda Fotihadan oldin “auvzu”ni aytish.

7. Fotiha surasini o‘qib bo‘lgach, ichida “Omin” deyish (Buni imom ham, muqtadiy ham, yolg‘iz namoz o‘quvchi ham aytadi).

8. Imomning ruku’dan keyin “Samiallohu liman hamidah”, iqtido qilganlarning esa “Robbanaa lakal hamd”, deyishi (Namozni bir o‘zi o‘qigan kishi ikkalasini ham aytadi).

9. Bir rukndan boshqa ruknga o‘tayotganda “Allohu akbar”, deb takbir aytish.

10. Imom takbirlarni ovoz chiqarib aytishi. Iqtido qiluvchilar eshitishi uchun takbirlarni jahriy aytiladi.

11. Qiyomda ikki oyoq orasini to‘rt barmoq kengligida ochib turish.

12. Ruku’da qo‘l barmoqlarini ochib, ikki tizza ko‘zini mahkam ushlash, boshni orqa bilan bir tekis qilish, belini to‘g‘ri tutish, kamida uch marta “Subhaana robbiyal aziym”, deyish.

13. Ruku’dan bosh ko‘targach, a’zolar halovat topguncha biroz turish.

14. Qiyomdan sajdaga borishda avval tizzani, keyin kaftni, keyin burunni, oxirida peshonani qo‘yish. Sajdadan qiyomga turishda buning teskarisi qilinadi: avval peshona, keyin burun, keyin kaftlar, oxirida tizza yerdan ko‘tariladi.

15. Sajdada peshonani qo‘llar orasiga olish, barmoqlarni jipslab, bosh barmoqni qulog‘i to‘g‘risida ushlash, kamida uch marta “Subhaana robbiyal a’laa” deyish.

16. Sajdada erkaklar oyoqlari, tizzalari, qo‘llari, peshonasi, burni yerga tegib turishi, bilaklarini yerga ham, qorniga ham tekkazmay tutishi (Ayollar sajdada qorinlarini sonlariga, qo‘llarini yerga tekkazib turishadi).

17. Ikki sajda orasida o‘tirish. Bunda ikki kaft xuddi tashahhuddagidek tizzalar ustiga qo‘yiladi.

18. Erkaklarning chap oyoq ustiga o‘tirishi, o‘ng oyog‘ini tik qilib, barmoq uchlarini qiblaga qaratishi (Ayollar esa ikki oyog‘ini o‘ng tomonga chiqarib, chap dumbasiga o‘tiradi).

19. Tashahhuddan so‘ng salavot aytish, keyin Qur’onda, hadislarda kelgan duolarni o‘qish.

20. Namozdan chiqayotganda avval o‘ng, keyin chap tomonga salom berish.

21. Imomning har ikki tomonga salom berayotganida jamoatni, himoya qiluvchi farishtalarni, solih jinlarni niyat qilishi.

22. Iqtido qilgan kishining, imom o‘ng tomonda bo‘lsa, o‘ngga bergan, chapda bo‘lsa, chapga bergan, oldida bo‘lsa, har ikki tomonga bergan salomida imomni, jamoatdagi birodarlarini, himoya qiluvchi farishtalarni, solih jinlarni niyat qilishi.

23. Yolg‘iz namoz o‘qigan kishi salom berayotganda faqat farishtalarni niyat qilishi.

24. Jamoat salomini imom salomiga ergashtirishi.

25. To‘rt yoki uch rakatli farz namozlarining uchinchi, to‘rtinchi rakatlarida Fotiha surasini qiroat qilish. Lekin nafl (jumladan, ta’kidlangan sunnat) namozlarining uchinchi, to‘rtinchi rakatlarida Fotiha surasi bilan zam sura o‘qish vojibdir.

26. Farz namozlarini jamoat bo‘lib o‘qish.

Mazkur sunnat amallarni tark etish bilan namoz buzilmaydi, lekin go‘zal suratda ado etilmagan bo‘ladi. Demak, namozni xushu’ bilan o‘qishda, ulug‘ ajr-savoblar olishda namozdagi sunnat amallar o‘rni katta.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Mustahablari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/13",
'caption'=>"Quyidagilar Namozning Mustahablaridir:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Mustahablari.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Erkaklarning takbiri tahrima aytishda qo‘llarini ko‘ylak yengidan chiqarishlari.

2. Namoz o‘qiyotganda esnoq yoki yo‘tal kelsa, kuchi yetganicha qaytarish, iloji boricha yo‘talmaslikka harakat qilish.

3. Beixtiyor esnoq kelganida o‘ng qo‘l orqasi bilan og‘izni berkitish, Payg‘ambarimiz sollallohu alayhi va sallam biron marta esnamaganlarini yodga olish.

4. Muqim kishining bomdod namozida Fotiha surasidan so‘ng uzunroq, shom namozida qisqaroq, boshqa namozlarda o‘rtacha suralarni o‘qishi.

5. Sajdada barmoq oralarini zichlash, boshni ikki qo‘l orasiga, bosh barmoqni quloq to‘g‘risiga qo‘yish, qo‘l barmoqlari uchini, oyoq panjalarini qiblaga qaratish.

6. Namozni yolg‘iz o‘qiganda ruku’larda, sajdalarda tasbehni 3 martadan ko‘p (5, 7, 9 yoki 11 marta) aytish.

7. Qiyomda sajda o‘rniga, ruku’da oyoq barmoqlariga, sajdada burunga, qa’dada ko‘krakka, salom berayotganda yelkaga qarash.

8. Namozda tavoze’ bilan, o‘zini xokisor tutib turish.

Yuqorida sanalgan amallar namoz odoblari ham deyiladi. Ularga amal qilinsa, namoz yanada mukammal bo‘ladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozni buzuvchi amallar.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/14",
'caption'=>"Quyidagilar Namozni Buzuvchi Amallardir:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozni buzuvchi amallar.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Namozda gapirish (qasddan yoki adashib bo‘lsa ham).
2. Kishiga salom berish.
3. Salomga alik olish.
4. Uzrsiz tomoq qirish, yo‘talish.
5. ‘Uh‘, ‘uf‘, ‘ohkabi tovushlar chiqarish.
6. Og‘riq yoki musibatga ovoz chiqarib yig‘lash (ammo oxiratni o‘ylab yig‘lasa joiz).
7. O‘zi eshitadigan darajada kulish (qahqaha bilan qattiq kulsa, tahorati ham ketadi).

8. Aksa urganga javob qaytarish (ya’ni ‘Yarhamukalloh‘, deyish).
9. Savolga yoki xabarga oyatlar bilan bo‘lsa-da, javob berish.
10. Biror narsani yeb-ichish (labidagi, tishidagi ovqatni ham).
11. Namozni jamoat bilan o‘qiyotganda yonidagi odamga joy berish uchun surilish.
12. Qiroatni Mushafga qarab qilish.
13. ‘Amali kasir‘ qilish (ya’ni ko‘rgan odam ‘Namoz o‘qimayapti‘ deb o‘ylaydigan darajadagi amallarni qilish).
14. Najosat ustiga sajda qilish.
15. Ko‘krakni qibladan boshqa tarafga burish.

16. Sajdadagi holida ikki oyoq panjalarini yerdan ko‘tarish.
17. Qiroatni ma’no o‘zgaradigan darajada buzish.
18. Namoz farzlaridan birortasini uzrsiz qoldirish.
19. Namozning to‘la bir ruknida avratning ochiq bo‘lishi.
20. Tahoratning (tayammum, mashning ham) ketishi.
21. Bomdod namozida quyosh chiqib qolishi.
22. Namoz asnosida hushidan ketishi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Makruhlari.."){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/15",
'caption'=>"Namoz O‘qiyotganda Quyidagi Ishlarni Qilish Man Etiladi:

1. Yuzni o‘ng yoki chap tarafga qaratish.

2. Osmonga qarash.

3. Farz namozlarida biron narsaga uzrsiz suyanish.

4. Ruku’da, sajdada oyoq yoki qo‘l barmoqlarini yerdan ko‘tarish.

5. Qa’dada ikki oyoqni tik qilib tovon ustida o‘tirish.

6. Badani yoki kiyimini ko‘p o‘ynash.

7. Salomni faqat bir tarafga berish.

8. Namoz vojiblaridan birini qasdan tark etish. Masalan, farz namozlarining birinchi, ikkinchi rakatida Fotihani qiroat qilmaslik, qa’dada tashahhudni o‘qimaslik va hokazo.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning Makruhlari.."){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"NAMOZDAGI MAKRUH AMALLAR

 
1. Namoz sunnatlaridan birini atayin tark etish. Masalan, takbiri tahrimadan keyin sanoni o‘qimaslik, ruku’da, sajdada tasbeh aytmaslik va hokazo.

2. Mushaf tartibiga teskari qiroat qilish. Masalan, birinchi rakatda Ixlos, ikkinchi rakatda Masad surasini o‘qish.

3. Qisqa suralar o‘qiganda orada bir surani tashlab ketish. Misol uchun, birinchi rakatda Quraysh, ikkinchisida Kavsar surasini o‘qish.

4. Farz namozlarining bir rakatida bir surani ikki marta o‘qish.

5. Doim bir surani o‘qish, boshqalarini tark etish (Lekin, “Payg‘ambarimiz sollallohu alayhi va sallam namozda ko‘proq shu suralarni qiroat qilganlar”, degan niyati bo‘lsa, makruh emas).

6. Namozni xushu’siz, beparvo o‘qib qo‘yish.

7. Namoz o‘qiyotgan odamning sajda qilishga xalaqit bermaydigan mayda toshlarni surib tashlashi (Hadisda aytilganidek, bir marta sursa bo‘ladi).

8. Agar sajda o‘rni tuproq bo‘lsa, namozdan chiqqach peshonani tozalab artish.

9. Erkaklar sajda qilayotganda ikki bilagini yerga, qornini tizzasiga tekkazishi.

10. Erkaklar namoz vaqtida sochni turmaklab olishi.

11. Qiyomda qo‘lni belga qo‘yish.

12. Namoz o‘quvchi kiyimini osiltirib yoki yelkasiga tashlab yoxud yig‘ishtirib, yengini shimarib olishi.

13. Amali kasir qilmagan holda kiyimni uzrsiz to‘g‘rilash (Jumladan, sajdaga borayotganda qo‘li bilan shimini ko‘tarish), barmoqlarini bir-birining ichiga kirgizish, tanasining ayrim joylarini behuda o‘ynash. Chunki bu narsa xushu’ga xalal beradi.

14. Dangasalik yoki kibr tufayli bosh kiyimsiz namoz o‘qish (Ammo, Alloh huzurida o‘zini xor tutish niyatida boshyalang o‘qish makruh emas).

15. Qorin juda och paytda namoz o‘qish. Bunda avval ozroq taom yeb, nafs qondiriladi. Keyin xotirjam holda namoz o‘qiladi.

16. Fikrni chalg‘ituvchi narsalar qarshisida namoz o‘qish.

17. Hojatxonaga borish zarurati tug‘ilganda yoki yel chiqishi tang qilib turganda o‘zini majburlab ushlab turish.

18. Ko‘zini behuda yumib olish. Agar xushu’ hosil qilish uchun yumsa, hechqisi yo‘q.

19. Janoza namozida takbir aytilganida boshini ko‘tarish.

20. Imomning jamoatdan farqli darajada balandda turishi.

21. Namoz o‘quvchining – safda bo‘sh joy bo‘la turib – keyingi safda turishi.

22. Namozxon oldida, yon tarafida, kiyimida, sajdagohida jonli narsalar surati bo‘lishi (Agar surat orqada bo‘lsa, juda kichik yoki boshi o‘chirilgan bo‘lsa yoki jonsiz narsalar surati bo‘lsa, zarari yo‘q).

23. Olovga qarab namoz o‘qish. Chunki bunda namozxon majusiyga o‘xshab qoladi (Biroq, mehrobda chiroq turishining zarari yo‘q)

24. Namozxon oldidan birov o‘tishi ehtimoli bor joyda sutra qo‘ymasdan namoz o‘qish.

25. Kir, eski ish kiyimida namoz o‘qish.

26. Namozda oyatlarni, tasbehlarni barmoq bilan sanash.

Mazkur amallar bilan namoz buzilmaydi, lekin qusurli bo‘lib qoladi. Shuning uchun namozxon bunday ishlardan saqlangani ma’qul.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning mubohlari"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/16",
'caption'=>"Quyidagilar Namozning Mubohlaridir:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozning mubohlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Sajda qiladigan joyni zarurat uchun qo‘l bilan bir ikki marta surish

2. Ilon va chayonga o‘xshash chaqadigan hayvonlarni o‘ldirish

3. Nafl namozlarda bir rakatda bir surani takror o‘qish

4. Imom yanglishganda muqtadiylar takbir yoki tasbeh orqali imomni ogohlantirish

5. Ruku‘da badaniga yopishmasligi uchun kiyimlarini silkitish

6. Namozda ixtiyorsiz tahorati buzilgan kishi hech so‘zlamasdan tahorat qilib, kelgan joyidan boshlab, qolgan namozini o‘qish.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Erkak va ayollar namozining farqlar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/17",
'caption'=>"Erkak Va Ayol Kishi Namozi O‘rtasidagi Farqlar Quyidagilardir:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Erkak va ayollar namozining farqlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Ayol takbiri tahrimada qo‘llarini yengidan chiqarmaydi.

2. Takbirda qo‘llarini ko‘kragi barobarigacha ko‘taradi.

3. Ayol qiyomda o‘ng qo‘l kaftini chap qo‘l kafti ustida qilib ko‘kragiga qo‘yadi.

4. Ruku‘da panjalarini ochmay, jamlab tizzaga qo‘yadi.

5. Ruku‘da o‘tirmoqchi bo‘lgan kishi kabi sal egiladi.

6. Ruku‘da tirsak (chig‘anoq)larini sonlariga, bilaklarini yonboshiga yopishtirib turadi.

7. Sajdada qornini soniga, qo‘l bilaklarini yerga yopishtirib turadi.

8. Qa‘dada dumbasi bilan o‘ng tomonidan ikki oyog‘ini chiqarib, chap iligi ustiga o‘ng iligini qo‘yib o‘tiradi.

9. Jahriy namozlarni ham maxfiy (ichida) o‘qiydi.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozni buzish joiz bo‘lgan o‘rinlar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Quyidagi Holatlarda Namozni Buzish Joiz Hisoblanadi:",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "Namozni buzish joiz bo‘lgan o‘rinlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1.  Halokatning oldini olish uchun, garchi farz namozi bo‘lsa-da, buzishlik vojib bo‘ladi. 

Misol uchun bir kishi suvga cho‘kayotganligini bilsa yoki bir hayvon hujum qilsa, xoh u 
o‘ziga, xoh boshqa kishiga, xoh namoz o‘qiyotgan odamga, xoh tashqaridagiga bo‘lsin, 

shu halokatning oldini olish uchun namozini buzadi. 

2.   Bir dirham miqdoridagi molini o‘g‘ridan himoya qilish uchun, garchi farz namozini 

bo‘lsa ham, buzishlik joizdir. Bir dirham Suriyaning pulida o‘ttiz besh qirsh miqdoricha 

keladi. (Bizning O’zbek so‘mimizda 3250 so‘mga to‘g‘ri keladi. 2005-yil...- tarj.) 

3.   Ota yoki ona farzandini namoz o‘qiyotganini sezmay turib chaqirsa, farzand agar 

nafl namoz o‘qiyotgan bo‘lsa, faqat shu nafl namozni buzishlik joizdir. Ammo ota yoki 

ona farzandni namoz o‘qiyotganini bilib turib chaqirsa, farzand namozini buzishi joiz emas.",
'parse_mode'=>'html',
'reply_markup'=>$namozh,
]);
}
if($text == "🛐Namoz o‘qishni o‘rganamiz🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/19",
'caption'=>"O‘zingizga kerakli bo‘limni tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌆Bomdod namozi🌆"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/20",
'caption'=>"Bomdod Namozi O‘qilish Tartibi.(Erkaklar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌆Bomdod namozi🌆"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/21",
'caption'=>"Bomdod Namozi O‘qilish Tartibi.(Ayollar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🏙Peshin namozi🏜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/22",
'caption'=>"Peshin Namozi O‘qilish Tartibi.(Erkaklar Uchun)

Peshin Namozining sunnati ham shu tartibda o‘qiladi, faqat niyatda 《...Peshin Namozining...》 deyiladi. 3-4 rakatlarda ham zam sura o‘qiladi",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🏙Peshin namozi🏜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/23",
'caption'=>"Peshin Namozi O‘qilish Tartibi.(Ayollar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🏜Asr namozi🌇"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/24",
'caption'=>"Asr Namozi O‘qilish Tartibi.(Erkaklar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🏜Asr namozi🌇"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/25",
'caption'=>"Asr Namozi O‘qilish Tartibi.(Ayollar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌇Shom namozi🌆"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/26",
'caption'=>"Shom Namozi O‘qilish Tartibi.(Erkaklar Uchun)

Shom namozining 2 rakat sunnati ovoz chiqarmay o‘qiladi, huddi Bomdod namozi sunnati kabi, faqst niyyatda 《...shom namozi...》 deyiladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌇Shom namozi🌆"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/27",
'caption'=>"Shom Namozi O‘qilish Tartibi.(Ayollar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌃Xufton namozi🌉"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/28",
'caption'=>"Xufton Namozi O‘qilish Tartibi.(Erkaklar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🌃Xufton namozi🌉"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/29",
'caption'=>"Xufton Namozi O‘qilish Tartibi.(Ayollar Uchun)",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Namozdan keyin o‘qiladigan duolar🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Alloh Duolaringizni Ijobat Qilsin..!",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Namozdan keyin o‘qiladigan duolar🤲"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"NAMOZDAN KEYINGI ZIKRLAR

Namoz salom bilan tugaydi. Salomdan keyingi amallar (tasbehotu duolar) majburiy emas, ammo nihoyatda savoblidir.
Farz namozlaridan keyin quyidagi duoni o‘qish sunnatdir:
Allohumma antas-salam va minkas-salam. Tabarokta ya zaljalali val ikrom.
Mazmuni:
Ey Allohim, Sen barcha ayb-nuqsonlardan poksan. Barcha salomatlik va rahmat Sendandir. Ey azamat va qudrat egasi bo‘lgan Allohim, Sening shoning ulug‘dir.
Umuman, har vaqt namozni tugatgandan so‘ng Oyatal kursi o‘qilsa, tasbehot qilinsa, savobi ulug‘ bo‘ladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Musofirning namozi🏕"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/16",
'caption'=>"Qayerda bo‘lsangiz ham joningiz sog‘-salomat bo‘lsin. Ilohim eson-omon o‘z uyingizga qayting.!",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Musofirning namozi🏕"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Musofir namozi
Bizning dinimiz qulaylik, insonlarga marhamat dinidir. Chunonchi, u musofirlarga ham ancha yengilliklarni muhayyo qilib qo‘ygan. Yashab turgan joyidan o‘rtacha yurishda kamida 18 soatlik (90 chaqirim) masofaga o‘n besh kundan oz muddatni niyat qilib yo‘lga chiqqan kishi qishlog‘i yoki shahrining oxirgi uylari ko‘rinmay qolgan daqiqadan boshlab musofir hisoblanadi. O‘n besh kunga yo bundan ko‘pga niyat qilib chiqilsa, yo‘ldagina musofir sanaladi, borayotgan manzilining dastlabki uylari ko‘ringandan boshlab esa, muqim hukmiga o‘tadi va namozlarini to‘liq o‘qiydi.

Musofir odam to‘rt rakatlik farz namozlarini ikki rakatga qisqartirib (bomdod namozining farzi kabi) o‘qiydi. Biroq shom namozining uch rakat farzi va uch rakatlik vitr namozlarini to‘liq ado etadi. Agar musofir kishi muqim kishiga ergashib namoz o‘qisa, to‘rt rakatlik farzlarni ham to‘liq o‘qiydi. Muqim kishi musofir kishiga iqtido qilib namoz o‘qiyotgan bo‘lsa, unda imom ikki rakatdan so‘ng salom bergach, ergashuvchi salom bermaydi, ichida «Allohu akbar» deb qiyomga turadi-da, qolgan ikki rakatni mustaqil o‘zi o‘qib tugatadi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Qazo namozlar⏳"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"QAZO NAMOZLARI

Mo‘min-musulmonlar namozlarini doimo vaqtida o‘qishga harakat qilishlari lozim. Lekin biror sabab bilan o‘qilmay qolsa, u namozning qazosi o‘qilishi kerak. Farz namozlar va vitr namozi qoldirilsa, qazo qilib o‘qiladi.
Qazo namozi va umuman har qanday namoz o‘qish makruh hisoblangan uch vaqt borki, bular kun chiqish, kun botish va kun tikkaga kelgan (qiyom) paytlaridir.
Namozni o‘tkazib yuborish katta gunohdir. Binobarin, qazo namozi o‘qilgach, Alloh taolodan mag‘firat tilash va har namozni o‘z vaqtida, qazo qilmay o‘qishni nasib etishini so‘rab duo qilish kerak.


SAJDAI SAHV

Namozning farz yo vojiblaridan biri vaqtidan kechiktirib bajarilsa yoki vojib amali unutilib, bajarilmasa, qa‘dai oxirada (oxirgi o‘tirishda) faqat «Attahiy- yat» o‘qilib, o‘ng tomonga salom beradi va «Allohu akbar», deb ikki marta sajda qiladi va yana o‘tirgan holda «Attahiyyat», «Salovot», «Robbana» duolarini o‘qib, o‘ng va chap tomonga salom berib namozni tugallaydi. Bu ikki sajda «sajdai sahv» (xatoni o‘nglaydigan sajda) deyiladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Juma namozi🌙"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/8",
'caption'=>"Juma Namozi - Haftaning Har Juma Kuni Peshin Namozi Vaqtida Masjidda Ko‘pchilik O‘qiydigan Namozdir",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🤲Juma namozi🌙"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Tartibi 

Juma namozi ikki rakat farz boʻlib, undan oldin va keyin toʻrt rakat sunnat oʻqiladi. Ilk va oxirgi sunnatlar peshin namozining sunnatlari kabi oʻqiladi. Imomga iqtido qilib oʻqiladigan ikki rakat farz esa, bomdod namozining farzi kabi oʻqiladi. Juma namozida ikki rakat farz oʻqilmasdan oldin imom minbarda xutba qiladi. Juma namozi hur, ozod, muqim, salomatligi joyida, oyoqlari sogʻ kishiga farzdir.

Shartlari

peshin namozi oʻqiladigan vaqtda oʻqish;
namozdan oldin xutba oʻqish;
juma oʻqiladigan joy hammaga ochiq boʻlishi;
imomdan tashqari kamida uch kishidan iborat jamoat boʻlishi;
imom juma namozini oʻqishi uchun rasman ruxsatli boʻlishi;
juma oʻqiladigan joy shahar yoxud shahar hukmida boʻlishi kerak.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "☪Ikki hayit namozlari🌙"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Hayit namozlari ikki rakat vojib namoz bo‘lib, quyidagicha o‘qiladi: jamoat namoz o‘qishga hozir bo‘lib, saf tortganidan so‘ng hayit namozi o‘qishga niyat qilib, takbiri tahrima aytiladi (hayit namozlari uchun iqomat aytilmaydi). Va qo‘llar bog‘lanib, kindik ostida tutiladi. Hayit namozlariga bunday niyat qilinadi: «Shu vaqtda vojib bo‘lgan ro‘za (qurbon) hayiti namozini barcha takbirlari bilan shu imomga iqtido qilib, yuzimni Ka‘baning bir tarafiga qaratib, xolis Alloh uchun o‘qishni niyat qildim». Niyatdan so‘ng sano o‘qiladi. So‘ng imom eshittirib (qavm ichlarida) uch bor takbir («Allohu akbar») aytadi. Har takbirda qo‘llar quloqlar to‘g‘risigacha ko‘tariladi. Takbirlar orasida qo‘llar bog‘lanmaydi, yonda tutiladi. Bu holda uch bor takbir aytilgach, qo‘llar bog‘lanadi. So‘ng imom eshittirib qiroat qiladi, qavm jim eshitadi. Qiroatdan so‘ng ruku‘ va sajda qilinib, ikkinchi rakatga turiladi. Ikkinchi rakatda imom qiroatni tugatganidan so‘ng, rukudan oldin birinchi rakatda aytilgan tarzda uch bor takbir aytiladi. Va yana bir to‘rtinchi takbir aytilib, ruku‘ga boriladi va sajda qilinadi. Sajdadan so‘ng o‘tirib tashahhud, salovot va duo o‘qib salom beriladi.

Salomdan so‘ng imom minbarga chiqib, ikki xutba o‘qiydi. Imom birinchi xutbani ketma-ket to‘qqiz takbir, ikkinchi xutbani yetti takbir aytib boshlashi va ikkinchi xutbani o‘n to‘rt takbir aytib tugatishi mustahabdir.

Ikki hayit namoziga g‘usl qilib, eng yaxshi kiyimlarini kiyib, xushbo‘y bo‘lib borish sunnatdir. Ro‘za hayiti namozini ado qilishga borishdan oldin biror narsa yeb olish sunnat bo‘ladi. Qurbon hayiti namozini o‘qib bo‘lguncha esa hech narsa yemaslik sunnatdir. Qurbon hayiti namozini o‘qishga borishda yo‘lda ovoz chiqarib takbiri tashriq aytiladi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "☪Janoza namozi🤲"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/30",
'caption'=>"Janoza Namozining O‘qilish Tartibi.",
'parse_mode'=>'html',
'reply_markup'=>$namozo,
]);
}
if($text == "🛐Namoz vaqtlari⏳"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"🕌<b>Bugungi Namoz vaqtlari🕌

🌃Bomdod namozi:</b> $bobdod
<b>🌅Quyosh chiqishi:</b> $quyosh
<b>☀️Peshin namozi:</b> $pеshin
<b>☀️Asr namozi:</b> $asr
<b>🌄Shom namozi:</b> $shom
<b>⛼Xufton namozi:</b> $xufton

📅 $Y yil $d $oy, $hafta

Izoh: Barcha vaqtlar Toshkent shahar miqyosida berilgan!",
'parse_mode'=>'html',
'reply_markup'=>$namoz,
]);
}
if($text == "☪Suralar🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/31",
'caption'=>"Siz 《Suralar》Bo‘limidasiz. 
O‘zingizga Kerakli Bo‘limni Tanlang...!",
'parse_mode'=>'html',
'reply_markup'=>$sura,
]);
}
if($text == "🎵Audio shaklida🎶"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/6",
'caption'=>"Qayerda bo‘lsangiz ham joningiz sog‘-salomat bo‘lsin. Ilohim eson-omon o‘z uyingizga qayting.!",
'parse_mode'=>'html',
'reply_markup'=>$qaudio,
]);
}
if($text == "📃Ma‘nolar tarjimasi✏"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/31",
'caption'=>"📃Ma‘nolar tarjimasi✏",
'parse_mode'=>'html',
'reply_markup'=>$mano,
]);
}
if($text == "📃Suralar haqida📝"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/31",
'caption'=>"Sura (arabcha: سورة — tizma, qator, qoʻrgʻon, manzil va sharaf maʼnosida) — faqat Qurʻonga xos tushuncha, uning boʻlimlari Sura deyiladi, uni shartli ravishda bob bilan taqqoslash mumkin. Islom Ulamolari istilohida esa, Sura — Qurʼon oyatlarining boshlanish va tugashi belgilangan mustaqil toifasidir. Boshqacha qilib aytganda, Qurʼon oyatlarining qoʻrgʻon ila oʻralgandek bir toifasiga sura, deyiladi. Qurʼon suralardan iboratdir, sura Qurʼonning bir boʻlagi boʻlib, uch yoki undan koʻp oyatni oʻz ichiga oladi.",
'parse_mode'=>'html',
'reply_markup'=>$sura,
]);
}
if($text == "📃Suralar haqida📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Qurʻonda 114 ta sura boʻlib, ulardan har birining oʻz nomi bor. Baʼzi suralarning ismi suraning avvalidagi soʻzdan olingan. Baʼzilariniki esa, oʻsha surada zikri koʻproq kelgan narsalarning nomiga qoʻyilgan. Qurʻoni karimdagi eng qisqa Sura Kavsar surasi boʻlib, uch oyatdan, eng uzun sura Baqara surasi boʻlib, 286 oyatdan iboratdir. Qurʻon suralari ikki qismga boʻlinadi: 1. Hijratdan oldin tushgan suralar — „Makka suralari“ ((yoki Makkiy suralar) Makkada tushgan) deyiladi. 2. Hijratdan keyin tushgan suralar — „Madina suralari“ ((yoki Madaniy suralar) Madinada tushgan) deyiladi.",
'parse_mode'=>'html',
'reply_markup'=>$sura,
]);
}
if($text == "📖Fotiha surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/32",
'parse_mode'=>'html',
]);
}
if($text == "📖Baqara surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/33",
'parse_mode'=>'html',
]);
}
if($text == "📖Imron surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/34",
'parse_mode'=>'html',
]);
}
if($text == "📖Niso surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/35",
'parse_mode'=>'html',
]);
}
if($text == "📖Maida surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/36",
'parse_mode'=>'html',
]);
}
if($text == "📖Anam surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/37",
'parse_mode'=>'html',
]);
}
if($text == "📖Arof surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/38",
'parse_mode'=>'html',
]);
}
if($text == "📖Anfol surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/40",
'parse_mode'=>'html',
]);
}
if($text == "📖Tavba surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/39",
'parse_mode'=>'html',
]);
}
if($text == "📖Yunus surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/43",
'parse_mode'=>'html',
]);
}
if($text == "📖Hud surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/41",
'parse_mode'=>'html',
]);
}
if($text == "📖Yusuf surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/42",
'parse_mode'=>'html',
]);
}
if($text == "📖Rad surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/44",
'parse_mode'=>'html',
]);
}
if($text == "📖Ibrohim surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/45",
'parse_mode'=>'html',
]);
}
if($text == "📖Hijr surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/46",
'parse_mode'=>'html',
]);
}
if($text == "📖Nahl surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/47",
'parse_mode'=>'html',
]);
}
if($text == "📖Isro surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/48",
'parse_mode'=>'html',
]);
}
if($text == "📖Kahf surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/51",
'parse_mode'=>'html',
]);
}
if($text == "📖Maryam surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/49",
'parse_mode'=>'html',
]);
}
if($text == "📖Toha surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/50",
'parse_mode'=>'html',
]);
}
if($text == "📖Anbiyo suarsi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/52",
'parse_mode'=>'html',
]);
}
if($text == "📖Haj surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/53",
'parse_mode'=>'html',
]);
}
if($text == "📖Muminun surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/54",
'parse_mode'=>'html',
]);
}
if($text == "📖Nur surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/55",
'parse_mode'=>'html',
]);
}
if($text == "📖Furqon surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/56",
'parse_mode'=>'html',
]);
}
if($text == "📖Shuaro surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/57",
'parse_mode'=>'html',
]);
}
if($text == "📖Naml surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/58",
'parse_mode'=>'html',
]);
}
if($text == "📖Qasos surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/59",
'parse_mode'=>'html',
]);
}
if($text == "📖Ankabut surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/61",
'parse_mode'=>'html',
]);
}
if($text == "📖Rum Surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/60",
'parse_mode'=>'html',
]);
}
if($text == "📖Luqmon surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/62",
'parse_mode'=>'html',
]);
}
if($text == "📖Sajda surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/63",
'parse_mode'=>'html',
]);
}
if($text == "📖Ahzob surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/64",
'parse_mode'=>'html',
]);
}
if($text == "📖Saba surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/65",
'parse_mode'=>'html',
]);
}
if($text == "📖Fotir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/66",
'parse_mode'=>'html',
]);
}
if($text == "📖Yosin surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/67",
'parse_mode'=>'html',
]);
}
if($text == "📖Soffat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/68",
'parse_mode'=>'html',
]);
}
if($text == "📖Sod surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/69",
'parse_mode'=>'html',
]);
}
if($text == "📖Zumar surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/70",
'parse_mode'=>'html',
]);
}
if($text == "📖Gofir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/71",
'parse_mode'=>'html',
]);
}
if($text == "📖Fussilat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/72",
'parse_mode'=>'html',
]);
}
if($text == "📖Shoro surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/73",
'parse_mode'=>'html',
]);
}
if($text == "📖Zuxruf surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/74",
'parse_mode'=>'html',
]);
}
if($text == "📖Zuhan surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/75",
'parse_mode'=>'html',
]);
}

if($text == "📖Jathiya surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/76",
'parse_mode'=>'html',
]);
}
if($text == "📖Ahqaf surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/77",
'parse_mode'=>'html',
]);
}
if($text == "📖Muhammad surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/78",
'parse_mode'=>'html',
]);
}
if($text == "📖Fath surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/79",
'parse_mode'=>'html',
]);
}
if($text == "📖Hujurat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/80",
'parse_mode'=>'html',
]);
}
if($text == "📖Qof surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/81",
'parse_mode'=>'html',
]);
}
if($text == "📖Zuriyat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/82",
'parse_mode'=>'html',
]);
}
if($text == "📖Tur surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/83",
'parse_mode'=>'html',
]);
}
if($text == "📖Najim surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/84",
'parse_mode'=>'html',
]);
}
if($text == "📖Qamar surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/85",
'parse_mode'=>'html',
]);
}
if($text == "📖Rohman surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/86",
'parse_mode'=>'html',
]);
}
if($text == "📖Voqiya surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/87",
'parse_mode'=>'html',
]);
}
if($text == "📖Hadid surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/88",
'parse_mode'=>'html',
]);
}
if($text == "📖Mujadila surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/89",
'parse_mode'=>'html',
]);
}
if($text == "📖Hashir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/90",
'parse_mode'=>'html',
]);
}
if($text == "📖Mumtahina surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/91",
'parse_mode'=>'html',
]);
}
if($text == "📖Soff surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/92",
'parse_mode'=>'html',
]);
}
if($text == "📖Juma surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/93",
'parse_mode'=>'html',
]);
}
if($text == "📖Munofiqun surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/94",
'parse_mode'=>'html',
]);
}
if($text == "📖Taghabun surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/95",
'parse_mode'=>'html',
]);
}
if($text == "📖Taloq surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/96",
'parse_mode'=>'html',
]);
}
if($text == "📖Tahrim surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/97",
'parse_mode'=>'html',
]);
}
if($text == "📖Mulk surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/98",
'parse_mode'=>'html',
]);
}
if($text == "📖Qalam surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/99",
'parse_mode'=>'html',
]);
}
if($text == "📖Haqqa surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/100",
'parse_mode'=>'html',
]);
}
if($text == "📖Muorij surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/101",
'parse_mode'=>'html',
]);
}
if($text == "📖Nuh surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/102",
'parse_mode'=>'html',
]);
}
if($text == "📖jinn surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/103",
'parse_mode'=>'html',
]);
}
if($text == "📖Muzzammil surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/104",
'parse_mode'=>'html',
]);
}
if($text == "📖Muddathir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/105",
'parse_mode'=>'html',
]);
}
if($text == "📖Qiyama surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/106",
'parse_mode'=>'html',
]);
}
if($text == "📖Insan surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/107",
'parse_mode'=>'html',
]);
}
if($text == "📖Mursalat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/108",
'parse_mode'=>'html',
]);
}
if($text == "📖Naba surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/109",
'parse_mode'=>'html',
]);
}
if($text == "📖Naziat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/110",
'parse_mode'=>'html',
]);
}
if($text == "📖Abasa surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/111",
'parse_mode'=>'html',
]);
}
if($text == "📖Takawir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/112",
'parse_mode'=>'html',
]);
}
if($text == "📖Infitar surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/113",
'parse_mode'=>'html',
]);
}
if($text == "📖Mutaffifeen surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/114",
'parse_mode'=>'html',
]);
}
if($text == "📖Inshiqaq surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/115",
'parse_mode'=>'html',
]);
}
if($text == "📖Burooj surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/116",
'parse_mode'=>'html',
]);
}
if($text == "📖Tariq surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/117",
'parse_mode'=>'html',
]);
}
if($text == "📖Ala surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/118",
'parse_mode'=>'html',
]);
}
if($text == "📖Ghashiya surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/119",
'parse_mode'=>'html',
]);
}
if($text == "📖Fajir surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/120",
'parse_mode'=>'html',
]);
}
if($text == "📖Balad surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/121",
'parse_mode'=>'html',
]);
}
if($text == "📖Shams surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/122",
'parse_mode'=>'html',
]);
}
if($text == "📖Lail surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/123",
'parse_mode'=>'html',
]);
}
if($text == "📖Dhuha surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/124",
'parse_mode'=>'html',
]);
}
if($text == "📖Sharh surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/125",
'parse_mode'=>'html',
]);
}
if($text == "📖Teen surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/126",
'parse_mode'=>'html',
]);
}
if($text == "📖falaq surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/127",
'parse_mode'=>'html',
]);
}
if($text == "📖Qadr surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/128",
'parse_mode'=>'html',
]);
}
if($text == "📖Bayyina surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/129",
'parse_mode'=>'html',
]);
}
if($text == "📖Zilzila surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/130",
'parse_mode'=>'html',
]);
}
if($text == "📖Adiyat surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/131",
'parse_mode'=>'html',
]);
}
if($text == "📖Qaria surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/132",
'parse_mode'=>'html',
]);
}
if($text == "📖Takathur surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/133",
'parse_mode'=>'html',
]);
}
if($text == "📖Asr surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/134",
'parse_mode'=>'html',
]);
}
if($text == "📖Hamza surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/135",
'parse_mode'=>'html',
]);
}
if($text == "📖Fil surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/136",
'parse_mode'=>'html',
]);
}
if($text == "📖Quraysh surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/137",
'parse_mode'=>'html',
]);
}
if($text == "📖Moun surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/138",
'parse_mode'=>'html',
]);
}
if($text == "📖Kavsar surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/139",
'parse_mode'=>'html',
]);
}
if($text == "📖Kofirun surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/140",
'parse_mode'=>'html',
]);
}
if($text == "📖Nosr surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/141",
'parse_mode'=>'html',
]);
}
if($text == "📖Masad surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/142",
'parse_mode'=>'html',
]);
}
if($text == "📖Ixlos surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/143",
'parse_mode'=>'html',
]);
}
if($text == "📖Falaq surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/144",
'parse_mode'=>'html',
]);
}
if($text == "📖Nos surasi"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/145",
'parse_mode'=>'html',
]);
}
if($text == "📖Qur‘oni karim📖"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/146",
'caption'=>"Siz 《Qur‘oni Karim》 Bo‘limidasiz. 
Iltimos O‘zingizga Kerakli Bo‘limni Tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$qoron,
]);
}


if($text == "☪Qur‘oni karim haqida🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/6",
'caption'=>"Qurʼon (arabcha: القرآن oʻqimoq, qiroat qilmoq) — musulmonlarning asosiy muqaddas kitobi. Islom eʼtiqodiga koʻra, Qurʼon vahiy orqali Muhammad paygʻambarga 610—632 yillar davomida nozil qilingan Allohning kalomi (Kalomulloh). Qurʼon „Kitob“ (yozuv), „Furqon“ (haq bilan botilning orasini ayiruvchi), „Zikr“ (eslatma), „Tanzil“ (nozil qilingan) kabi nomlar bilan atalib, „Nur“ (yorugʻlik), „Hudo“ (hidoyat), „Muborak“ (barakotli), „Mubin“ (ochiq-ravshan), „Bushro“ (xushxabar), „Aziz“ (eʼzozlanuvchi), „Majid“ (ulugʻ), „Bashir“ (bashorat beruvchi), „Nazir“ (ogohlantiruvchi) kabi soʻzlar bilan sifatlangan. Islom olamida Qurʼon musʼhaf nomi bilan ham mashhur. Islom ulamolari Qurʼonning 30 xil nom va sifatlarini sanab oʻtganlar.",
'parse_mode'=>'html',
'reply_markup'=>$qoron,
]);
}
if($text == "☪Qur‘oni karm tarixi📝"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom tarixiga oid manbalarda keltirilishicha, Qurʼon nozil boʻlishi milodiy 610-yil boshlangan. Muhammad paygʻambar 40 yoshda Makka shahri yaqinidagi Hiro gʻorida chuqur tafakkurga berilib oʻtirgan bir paytda Jabroil farishta „Iqroʼ“ („Oʻqi“) deb boshlanuvchi „Alaq“ surasining avvalgi 5 oyatini keltirdi. Bu jarayon Makkada 13 yil, Madinada 10 yil, hammasi boʻlib 23 yil davom etgan. Qurʼonning nozil qilinishi islom aqidasi boʻyicha ramazon oyining 27-kuniga oʻtar kechasi yuz bergan. Shuning uchun ham bu oy muqaddas hisoblanib, roʻza tutilgan kunning 27-kechasi laylatul-qadr, yaʼni qadrli, ilohiy qudrat namoyon boʻladigan, bandalarning bir yillik taqdiri hal qilinadigan (qadr — taqdir, oʻlchov) tabarruk kecha deb ulugʻlanadi.

Qurʼonning boʻlimlari sura deyiladi, uni shartli ravishda bob bilan taqqoslash mumkin. Har sura oyatlarga boʻlingan. Qurʼon 114 sura, 6236 oyatdan iborat. Har bir suraning oʻz nomi bor. Oyatlar esa tartib raqami bilan berilgan. Suralarning nomlari uning boshida kelgan soʻzdan olingan yoki zikri koʻproq kelgan narsalar, voqealar yohud asosiy qahramon nomi bilan atalgan. Keyinchalik oʻqish va yodlash oson boʻlishi uchun Iroq hokimi Hajjoj ibn Yusuf (hukmronlik yillari 694—714) koʻrsatmasiga binoan Qurʼon 30 qism (arabcha: juz, forscha: pora)ga boʻlingan. Qurʼonda birinchi kelgan „Fotiha“ surasidan keyingi suralar katta, oʻrtacha va kichik suralar tartibida joylashgan. 2-Baqara surasi 286 oyatdan, eng qisqa Kavsar surasi 3 oyatdan iborat. Eng qisqa oyatlar „Toho“ va „Yosin“, eng uzun oyat „Baqara“ surasining 282-oyatidir. Suralar nozil boʻlish vaqti va joyiga koʻra 2 ga: hijradan oldin nozil boʻlgan suralar — „Makka suralari“ (610—622 yillar, 86 sura) va hijradan keyin nozil boʻlgan suralar — „Madina suralari“ (622-yildan, 28 sura) ga ajratiladi.

Qurʼon matnining koʻp qismi Alloh bilan soʻzlashish, islom dushmanlari yoki undan ikkilanuvchilar bilan munozara qilish shaklida berilgan.",
'parse_mode'=>'html',
'reply_markup'=>$qoron,
]);
}
if($text == "🎙30 pora audio formatda🎶"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Marhamat o‘zingizga kerakli bo‘limni tanlang.",
'parse_mode'=>'html',
'reply_markup'=>$pora,
]);
}
if($text == "🎙1-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/147",
'caption'=>"🎙1-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙2-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/148",
'caption'=>"🎙2-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙3-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/149",
'caption'=>"🎙3-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙4-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/150",
'caption'=>"🎙4-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙5-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/151",
'caption'=>"🎙5-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙6-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/152",
'caption'=>"🎙6-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙7-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/153",
'caption'=>"🎙7-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙8-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/154",
'caption'=>"🎙8-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙9-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/155",
'caption'=>"🎙9-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙10-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/156",
'caption'=>"🎙10-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙11-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/157",
'caption'=>"🎙11-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙12-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/158",
'caption'=>"🎙12-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙13-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/159",
'caption'=>"🎙13-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙14-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/160",
'caption'=>"🎙14-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙15-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/161",
'caption'=>"🎙15-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙16-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/162",
'caption'=>"🎙16-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙17-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/163",
'caption'=>"🎙17-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙18-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/164",
'caption'=>"🎙18-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙19-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/165",
'caption'=>"🎙19-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙20-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/166",
'caption'=>"🎙20-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙21-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/167",
'caption'=>"🎙21-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙22-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/168",
'caption'=>"🎙22-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙23-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/169",
'caption'=>"🎙23-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙24-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/170",
'caption'=>"🎙24-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙25-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/171",
'caption'=>"🎙25-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙26-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/172",
'caption'=>"🎙26-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙27-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/173",
'caption'=>"🎙27-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙28-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/174",
'caption'=>"🎙28-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙29-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/175",
'caption'=>"🎙29-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙30-pora🔉"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/176",
'caption'=>"🎙30-pora🔉 Tarjimasi",
'parse_mode'=>'html',
]);
}
if($text == "🎙Maruzalar🎶"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Rasmlar_Kanali_N1_Bu/1480",
'caption'=>"Siz 《Maruzalar》 bo‘limidasiz.
Marhamat o‘zingizga kerakli mavzuni tanlang...!




⚠️Ush bu bo‘limni rivojlantirishga bizga yordam bering. Yani sizda bor ammo 《Maruzalar》 bo‘limiga kiritilmagan ma‘lumotlar bo‘lsa iltimos bizga yuboring. Zero Islom dinini o‘rgatish barchamiz uchun huzur bag‘ishlaydi


👤Admin bilan bog‘lanish: @FiRdAvSbEk_CrEaToR",
'parse_mode'=>'html',
'reply_markup'=>$maruza,
]);
}
if($text == "Haj va umra haqida batafsil"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/186",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Haj va umra haqida batafsil",
'parse_mode'=>'html',
]);
}
if($text == "Alloh eng yomon ko‘rgan narsa"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/187",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Alloh eng yomon ko‘rgan narsa",
'parse_mode'=>'html',
]);
}
if($text == "Oilani buzishga majburlashga ota-onaning haqqi yo‘q"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/188",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Oilani buzishga majburlashga ota-onaning haqqi yo‘q",
'parse_mode'=>'html',
]);
}
if($text == "Taloq qachon tushadi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/189",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Nikoh. Taloq qachon tushadi",
'parse_mode'=>'html',
]);
}
if($text == "Ajralishuvlar ko‘paysa nima qilinadi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/190",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Ajralishuvlar ko‘paysa nima qilinadi",
'parse_mode'=>'html',
]);
}
if($text == "Taloq qachon ishlatiladi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/191",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Taloq qachon ishlatiladi",
'parse_mode'=>'html',
]);
}
if($text == "Xotinni taloq bilan qo‘rqitish-nomardlik"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/192",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Er o‘z xotinini taloq bilan qo‘rqitishi-nomardlikdir",
'parse_mode'=>'html',
]);
}
if($text == "Taloq nima degani"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/193",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Taloq nima degani",
'parse_mode'=>'html',
]);
}
if($text == "Oila ajralishi sababi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/194",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Viloyatlardagi oilalar ajralishi sababi",
'parse_mode'=>'html',
]);
}
if($text == "Kim folbinga borsa"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/195",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Kimki folbinga borsa...",
'parse_mode'=>'html',
]);
}
if($text == "Ikki dunyoga yetadigan duo"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/196",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Ikki dunyoga yetadigan duo",
'parse_mode'=>'html',
]);
}
if($text == "Savob qilishning eng oson yo‘li"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/197",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Savob qilishning eng oson yo‘li",
'parse_mode'=>'html',
]);
}
if($text == "Соҳиби Журайж qissasi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/198",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Соҳиби Журайж qissasi",
'parse_mode'=>'html',
]);
}
if($text == "Folbinlik"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/199",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Folbinlik shariatga xilof, iymonga xilof, musulmonchilikga xilof",
'parse_mode'=>'html',
]);
}
if($text == "Maxfiy va jahriy zikrlar"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/200",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Maxfiy va jahriy zikrlar",
'parse_mode'=>'html',
]);
}
if($text == "Safar namozi haqida"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/201",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Safar namozi haqida batafsil",
'parse_mode'=>'html',
]);
}
if($text == "Folbinga ishonuvchilar"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/202",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Musulmonman deganlar orasidan folbinlar, folbinga ishonuvchilar chiqdi",
'parse_mode'=>'html',
]);
}
if($text == "Folbinlik-kufrdir"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/203",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Folbinlik bu kufr",
'parse_mode'=>'html',
]);
}
if($text == "Erkar va ayol orasidagi muhabbat"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/204",
'caption'=>"Odinaxon Muhammad Yusuf
 
Erkar va ayol orasidagi muhabbat",
'parse_mode'=>'html',
]);
}
if($text == "Nega ishimiz yurishmayabdi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/205",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Nega ishimiz yurishmayabdi",
'parse_mode'=>'html',
]);
}
if($text == "Internetdagi tanishuv"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/206",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Internetdagi tanishuv, yigit va qizlarning vertual munosabatlari",
'parse_mode'=>'html',
]);
}
if($text == "Ahli kitob bilan bo‘ladigan munosabat"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/207",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Ahli kitob bilan bo‘ladigan munosabat",
'parse_mode'=>'html',
]);
}
if($text == "Musulmonmizmi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/208",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Musulmonmizmi? Tekshirib qo‘yaylik.",
'parse_mode'=>'html',
]);
}
if($text == "Din kimdan o‘rganiladi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/209",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Din kimdan o‘rganiladi",
'parse_mode'=>'html',
]);
}
if($text == "Mulk surasining mo‘jizasi"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/210",
'caption'=>"Shayx Muhammad Sodiq Muhammad Yusuf
 
Mulk surasining mo‘jizasi",
'parse_mode'=>'html',
]);
}
if($text == "🛐Ro‘za🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/211",
'caption'=>"Siz 《Ro‘za》 bo‘limidasiz. 
O‘zingizga kerakli munyuni tanglang..!",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}
if($text == "🌙Ro‘za tutish haqida🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/212",
'caption'=>"Ro'za tutish haqida",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}
if($text == "🌙Ro‘za tutish haqida🤲"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Ro‘za tutish qoidalarini bilasizmi?


Muqaddas Ramazon oyi ham kirib kelgach. Bu oy o‘zi bilan tinchlik-omonlik, qut-baraka, fayz va go‘zallik olib keladi. Ramazon ro‘zasini tutishning ham bir qancha qoidalari borki, uni ado etish barobarida savob va yaxshilik olinsa, ikkinchidan Muqaddas oyning hurmati ham joyiga qo‘yiladi.


Saharlik

Ro‘za lug‘atda – “siyom” deb atalib, o‘zini bir narsadan tiyishni bildiradi. Shariat istilohida esa: “Tong otgandan to quyosh botgunicha niyat bilan ro‘zani buzuvchi narsalardan o‘zini tiyishdir”. Ya'ni, kishi saharlik vaqtidan to shom vaqtiga qadar yemay, ichmay, jufti haloli bilan jinsiy aloqa qilmay turadi.



Subhi sodiq kirishi bilan saharlik vaqti tugab, ro‘za vaqti boshlanadi. Ikkisining o‘rtasini ajratib turadigan uchinchi bir vaqt yo‘q. Saharlik o‘z vaqtida bo‘lgani afzal. Lekin subhi sodiq kirgan-kirmagani borasida ikkilanadigan darajada kechiktirish makruh. Ro‘za tutish niyatsiz bo‘lmaydi, albatta, niyat qilinib, saharlik duosi o‘qilishi lozim.

Og‘iz yopish duosi quyidagicha: “Navaytu an asuma sovma shahri ramazona minal fajri ilal mag‘ribi, xolisan lillahi ta'ala. Allohu akbar”.

 

Iftorlik va taroveh

Iftorlik ham, albatta, niyat va duo ila qilinadi. Iftorlik (og‘iz ochish) duosi: “Allohumma laka sumtu va bika amantu va a'layka tavakkaltu va a'la rizqika aftartu, fag‘firli ya g‘offaruma qoddamtu va ma axxortu birohmatika ya arhamar rohimiyn, Allohu akbar”.



Ana shu duo ila ro‘zador og‘zini ochadi, halol taomlar bilan taomlanadi. Ovqatlanishda shoshma-shosharlikka yo‘l qo‘yilmaydi. Chunki bu holat mo‘min odobiga to‘g‘ri kelmasligi bilan birga salomatlikka ham zararlidir. Shundan so‘ng taroveh namoziga chiqiladi.

Ro‘zadorning odoblari

Kim ro‘za tutib, Allohning ibodatini amalga oshirsa, u o‘zini boshqalarga o‘rnak bo‘lishi uchun ham odobli, bosiq va xushmuomala tutishi lozim. Ro‘zadorning tilidan har xil keraksiz gaplar chiqmasligi, ro‘za tutgan kishi g‘iybat, chaqimchilik kabi ishlardan uzoq bo‘lishi, haqoratli gap-so‘zlarni, umuman, gapirmasligi lozim. O‘zga ro‘zadorlarni ham hurmat qilishi, ularga shirin so‘zlashi, mushkullarini oson qilib berishi kerak.



Rasululloh sollallohu alayhi va sallam dedilar: «Ro‘za va Qur'on qiyomat kunida banda uchun shafoat so‘raydilar. Ro‘za: «Robbim, men uni taom va maylliklardan to‘sdim, mening u haqidagi shafoatimni qabul qil!», deydi. Qur'on: «Men uni tunlari uyqudan to‘sdim, mening u haqidagi shafoatimni qabul qil!», deydi. Shundan so‘ng ularning shafoatlari qabul qilinadi» (Imom Ahmad rivoyati).

 

Ramazon oyida ro‘za tutmaslik oqibati

Abdulloh ibn Mas'ud roziyallohu anhu dedi: «Rasululloh sollallohu alayhi va sallam dedilar: «Islomning asosi va dinning poydevori uchta bo‘lib, ular ustiga Islom tiklangan. (Ular): «Allohdan o‘zga iloh yo‘q» deb guvohlik berish, farz qilingan namozlar va Ramazon oyining ro‘zasi» (Abu Ya'lo, Daylamiy va imom Zaxabiy rivoyatlari).

Abu Hurayra raziyallohu anhu dedi: «Rasululloh sollallohu alayhi va sallam dedilar: «Ramazonning bir kunida Alloh izn bermagan ruxsatsiz (qasddan) ro‘za tutmagan odam hayoti davomida ro‘za tutsa-da, qazo o‘rniga o‘tmas» (Imom Abu Dovud, Imom ibn Mojja, imom Termiziy rivoyatlari).


Ro‘zador unutib biron narsani yeb-ichsa, ro‘zasi buzilmaydi, balki Allohning mehmoni bo‘ladi. Rasululloh sollallohu alayhi va sallam dedilar: «Ro‘zadorligini unutib yegan yoki ichgan odam, ro‘zasini yetkazsin. Chunki uni Alloh yedirib, ichirgandir» (Imom Muslim rivoyati). Ammo ro‘zani qasddan ochish gunoh hisoblanadi.

Umuman olganda, Ramazonni munosib o‘tkazish, uning odoblariga, qoidalariga rioya etish har bir mo‘min-musulmonning farzidir. Ramazon ro‘zasini besabab qoldirish va uni tutmaslik kishini gunohkor etadi. Hayotidan baraka ko‘tariladi. Chunki Ramazonning har bir daqiqasida baraka yashiringan.",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}
if($text == "🤲Ro‘za duosi🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/212",
'caption'=>"Рўза тутиш (саҳарлик, оғиз ёпиш) дуоси
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

نَوَيْتُ أَنْ أَصُومَ صَوْمَ شَهْرَ رَمَضَانَ مِنَ الْفَجْرِ إِلَى الْمَغْرِبِ، خَالِصًا لِلهِ تَعَالَى أَللهُ أَكْبَرُ
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Навайту ан асувма совма шаҳри рамазона минал фажри илал мағриби, холисан лиллаҳи таъаалаа Аллоҳу акбар.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Маъноси: Рамазон ойининг рўзасини субҳдан то кун ботгунча тутмоқни ният қилдим. Холис Аллоҳ учун Аллоҳ буюкдир.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}
if($text == "🤲Ro‘za duosi🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/212",
'caption'=>"Ифторлик (оғиз очиш) дуоси
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

اَللَّهُمَّ لَكَ صُمْتُ وَ بِكَ آمَنْتُ وَ عَلَيْكَ تَوَكَّلْتُ وَ عَلَى رِزْقِكَ أَفْتَرْتُ، فَغْفِرْلِى مَا قَدَّمْتُ وَ مَا أَخَّرْتُ بِرَحْمَتِكَ يَا أَرْحَمَ الرَّاحِمِينَ
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Аллоҳумма лака сумту ва бика ааманту ва аълайка таваккалту ва аълаа ризқика афтарту, фағфирлий ма қоддамту ва маа аххорту бироҳматика йаа арҳамар рооҳимийн.
➖➖➖➖➖➖➖➖➖➖➖➖➖➖

Маъноси: Эй Аллоҳ, ушбу Рўзамни Сен учун тутдим ва Сенга иймон келтирдим ва Сенга таваккал қилдим ва берган ризқинг билан ифтор қилдим. Эй меҳрибонларнинг энг меҳрибони, менинг аввалги ва кейинги гуноҳларимни мағфират қилгил
➖➖➖➖➖➖➖➖➖➖➖➖➖➖",
'parse_mode'=>'html',
'reply_markup'=>$roza,
]);
}
if($text == "🗓Taqvim🗒"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/301",
'caption'=>"2021-yil Ro‘za Oyi Taqvimi
Viloyatlar Bo'yicha Soatlar Vaqtlari Bir Biridan Farq Qilishi Mumkun !!!",
'parse_mode'=>'html',
'reply_markup'=>$rozaa,
]);
}
if($text == "🗓Toshkent Taqvimi🗒"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"2021-yil ro‘za oyi taqvimi!!!

     | Aprel |   Hafta   | Saxarlik |  Iftor  
     |  May  |    kuni    |   (tong)  | (shom)
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
1   |  13    Seshanba      04:25      19:03
2   |  14   Chorshanba    04:24     19:04
3   |  15    Payshanba     04:22     19:05
4   |  16       Juma            04:20     19:06
5   |  17     Shanba          04:18     19:07
6   |  18    Yakshanba     04:16     19:08
7   |  19      Dushanba     04:14     19:09
8   |  20     Seshanba       04:13     19:10
9   |  21    Chorshanba     04:11     19:11
10 |  22     Payshanba     04:09     19:13
11 |  23       Juma            04:07     19:14
12 |  24      Shanba          04:05     19:15
13 |  25   Yakshanba       04:04     19:16
14 |  26     Dushanba       04:02      19:17
15 |  27     Seshanba       04:00      19:18
16 |  28    Chorshanba     03:58     19:19
17 |  29   Payshanba        03:57     19:20
18 |  30        Juma            03:55     19:21
19 |  1        Shanba           03:53     19:22
20 |  2     Yakshanba        03:51     19:23
21 |  3      Dushanba         03:50     19:24
22 |  4       Seshanba         03:48     19:25
23 |  5     Chorshanba       03:46     19:26
24 |  6      Payshanba        03:45     19:27
25 |  7          Juma             03:43     19:28
26 |  8        Shanba           03:42      19:29
27 |  9      Yakshanba        03:40     19:31
28 |  10    Dushanba          03:39     19:32
29 |  11     Seshanba         03:37     19:33
30 |  12    Chorshanba       03:36     19:34
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
TOSHKENT bo'yicha Tuzilgan Ramazon Taqvimi ! ",
'parse_mode'=>'html',
'reply_markup'=>$rozaa,
]);
}
if($text == "🗓Farg'ona Taqvimi🗒"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"2021-yil ro‘za oyi taqvimi!!!

     | Aprel |   Hafta   | Saxarlik |  Iftor  
     |  May  |    kuni    |   (tong)  | (shom)
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
1   |  13    Seshanba      04:15      18:53
2   |  14   Chorshanba    04:14     18:54
3   |  15    Payshanba     04:12     18:55
4   |  16       Juma            04:10     18:56
5   |  17     Shanba          04:08     18:57
6   |  18    Yakshanba     04:06     18:58
7   |  19      Dushanba     04:04     18:59
8   |  20     Seshanba       04:03     19:00
9   |  21    Chorshanba     04:01     19:01
10 |  22     Payshanba     03:59     19:03
11 |  23       Juma            03:57     19:04
12 |  24      Shanba          03:55     19:05
13 |  25   Yakshanba       03:54     19:06
14 |  26     Dushanba       03:52      19:07
15 |  27     Seshanba       03:50      19:08
16 |  28    Chorshanba     03:48     19:09
17 |  29   Payshanba        03:47     19:10
18 |  30        Juma            03:45     19:11
19 |  1        Shanba           03:43     19:12
20 |  2     Yakshanba        03:41     19:13
21 |  3      Dushanba         03:40     19:14
22 |  4       Seshanba         03:38     19:15
23 |  5     Chorshanba       03:36     19:16
24 |  6      Payshanba        03:35     19:17
25 |  7          Juma             03:33     19:18
26 |  8        Shanba           03:32      19:19
27 |  9      Yakshanba        03:30     19:21
28 |  10    Dushanba          03:29     19:22
29 |  11     Seshanba         03:27     19:23
30 |  12    Chorshanba       03:26     19:24
➖➖➖➖➖➖➖➖➖➖➖➖➖➖
FARG'ONA bo'yicha Tuzilgan Ramazon Taqvimi ! ",
'parse_mode'=>'html',
'reply_markup'=>$rozaa,
]);
}
if($text == "☝️Qirq farz☝️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/214",
'caption'=>"Islom dinidagi 40 ta farz",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}

if($text == "☝️Qirq farz☝️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Islom besh farzni o‘z ichiga oladi:

1. Imon.

2. Namoz.

3. Ro‘za.

4. Zakot.

5. Haj.

Imon yettita farzdan iborat:

1) Allohga;

2) Allohning farishtalariga;

3) Allohning kitoblariga;

4) Allohning payg‘ambarlariga;

5) Oxirat kuniga;

6) Taqdirga, ya’ni yaxshilik ham, yomonlik ham Allohdan ekaniga;

7) O‘limdan keyin qayta tirilmoqqa ishonish.

Tahoratning farzlari to‘rtta:

1. Yuzni sochlardan xoli joylarini iyak ostigacha va ikki quloq orasidagi qismini yuvish.

2. Qo‘llarni tirsaklari bilan birga qo‘shib yuvish.

3. Boshning to‘rtdan biriga mash tortish.

4. Oyoqlarni to‘piqlari bilan birga yuvish.

G‘uslning farzlari

1. Og‘izni yaxshilab chayish.

2. Burunni achishguncha yaxshilab chayish.

3. Badanning hamma joyini qoldirmasdan yuvish.

Tayammumning farzlari

1. Niyat.

2. Pok tuproqni qasd qilish.

3. Ikki qo‘lni pok tuproqqa urib yuzga surish.

4. Qo‘llarni yana tuproqqa urib, tirsak bilan qo‘shib qo‘llarga surish.

Namozning farzlari o‘n ikkitadir.

Oltitasi namoz tashqarisida, oltitasi namoz ichida.

Namoz tashqarisidagilar «shart», ichidagilar «rukn» deyiladi.

Namozning olti sharti

1. Tahorati yo‘qning tahorat olishi, junub bo‘lganning g‘usl qilishi.

2.   Badan, kiyim va namoz o‘qiladigan joy toza bo‘lishi.

3.   Avrat yopiq bo‘lishi.

4.   Qiblaga qarab turish.

5.   O‘z vaqtida o‘qish.

6.   O‘qiydigan namoziga niyat qilish.

Namozning olti rukni

1.   Iftitoh takbiri.

2.   Qiyom.

3.   Qiroat.

4.   Ruku.

5.   Sajda.

6.   Qa’da (so‘nggi o‘tirish).

Quyidagilar ham farzdir:

1. Ilm olish.

2. Amri ma’ruf, nahyi munkar.

3. Halol mehnat qilish.

4. Rizqni halol yo‘l bilan topish.

5. Shariat halol deb belgilagan narsalarni yeyish.",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
if($text == "☝️Olti diniy kalima☝️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/215",
'caption'=>"Islom dinidagi olti diniy kalima.",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}

if($text == "☝️Olti diniy kalima☝️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1. Kalimai toyyiba

La ilaha illallohu Muhammadur rosululloh.

To‘g‘ri so‘z: Allohdan o‘zga sig‘iniladigan (iloh) yo‘qdir! Muhammad Allohning rasulidir! 

2. Kalimai shahodat

Ashhadu alla ilaha illallohu va ashhadu anna Muhammadan ‘abduhu va rosuluh.

Iqrorlik so‘zi: Allohdan o‘zga sig‘iniladigan (iloh)ning yo‘qligiga va Muhammad Allohning bandasi va rasuli ekaniga iqrorman. 

3. Kalimai tavhid

Ashhadu alla ilaha illallohu vahdahu la sharika lah, lahul mulku va lahul hamd(u) yuhyi va yumit(u) va huva hayyul la yamut(u), biyadihil xoyr(u) va huva ‘ala kulli shayin qodir.

Tanholigiga iqrorlik so‘zi: Tanho Allohdan o‘zga sig‘iniladigan (iloh) yo‘qligiga iqrorman! Allohning sherigi yo‘qdir. Mulk Allohnikidir. Maqtov Allohgadir. (Alloh) tiriltiradi va o‘ldiradi. Ammo O‘zi tirikdir, o‘lmaydi. Yaxshilik Uning ixtiyoridadir va U hamma narsaga qodirdir! 

4. Kalimai raddi kufr

Allohumma inni a’uzu bika min an ushrika bika shayan va ana a’lam. Va astag‘firuka lima la a’lam. Innaka anta ‘allamul g‘uyub.

Kufrni qaytarish so‘zi: Allohim, Sendan o‘zim bilganim holda Senga biror narsani sherik qilishimdan asrashingni so‘rayman. Sendan o‘zim bilmaganim holda shirk qilib qo‘ygan bo‘lsam, kechishingni tilayman. Albatta, Sen g‘ayblarni bilguvchi Zotsan. 

5. Kalimai istig‘for

Astag‘firulloh, astag‘firulloh, astag‘firulloha ta’ala min kulli zambin aznabtuhu ‘amdan av xotoan sirron va ‘alaniyah. Va atubu ilayhi minaz zambillazi a’lamu va minaz-zambillazi la a’lam. Innaka anta ‘allamul g‘uyub.

Gunohlarni kechishini so‘rash so‘zi: Allohdan gunohlarimni kechishini so‘rayman. Allohdan gunohlarimni kechishini so‘rayman. Alloh taolodan ataylab yo adashib, yashirin yo oshkora qilgan hamma gunohlarimni kechishini so‘rayman. O‘zim bilgan va bilmagan gunohlardan Allohga qaytaman. Albatta, Sen g‘ayblarni bilguchi Zotsan. 

6. Kalimai tamjid

Subhanalloh val hamdu lillah va la ilaha illallohu vallohu akbar. La havla va la quvvata illa billahil ‘aliyyil ‘azim. Ma shaallohu kana va ma lam yashalam yakun.

Ulug‘lash so‘zi: Allohning aybu nuqsoni yo‘qdir. Va maqtov Allohgadir. Allohdan o‘zga sig‘iniladigan (iloh) yo‘qdir! Alloh ulug‘dir. Mutloq kuch va quvvat qudratli va buyuk Allohdan o‘zgada yo‘qdir. Alloh nimaniki xohlasa, bo‘ladi, nimaniki xohlamasa, bo‘lmaydi.",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
if($text == "☝️Olti diniy kalima☝️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Iymoni mujmal 

Amantu billahi kama huva bi asma’ihi va sifatihi va qobiltu jamiy’a ahkamihi va arkanihi.

Allohni ismi va sifatlari bilan tanidim va barcha buyurgan hukmlarini qabul qildim.

Iymoni mufassal 

Amantu billahi va malaikatihi va kutubihi va rusulihi val yavmil axiri val qodari xoyrihi va sharrihi minallohi ta’ala val ba’si ba’dal mavt.

Mo‘minlikning batafsil ifodasi: Allohga, Uning farishtalariga, kitoblariga, rasullariga, oxirat kuniga, yaxshilik va yomonlik Allohning xohishi bilan bo‘lishiga va o‘limdan keyin qayta tirilishga ishondim",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
if($text == "🛁Poklanish🚿"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/216",
'caption'=>"Islom dinidagi olti diniy kalima.",
'parse_mode'=>'html',
'reply_markup'=>$pok,
]);
}

if($text == "🛁Poklanish🚿"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"NAMOZGA POKLANISH
Bizning hanif Islom dinimiz poklikka juda katta ahamiyat bеrgan va musulmonlarni namoz oʻqishdan avval tahorat (buning iloji boʻlmaganda tayammum) qilishga buyurgan. Ular tahorat qilishayotganda yuzlari, qoʻllari va oyoqlarini yuvishadi. Shuningdеk, Islom moʻminlarni gʻusl qilish, bundan tashqari moʻylov va tirnoqlarini qisqartirish, kiyimlarini pokiza tutish, jamoat joylarida, xususan, juma va hayit namozlarida xushboʻylanib yurishga targʻib qiladi. 

  Darhaqiqat, Rasululloh sollallohu alayhi vasallam safardan qaytayotgan sahobalariga: «Sizlar birodarlaringiz huzuriga qaytmoqdasiz. Shunday ekan, ulovlaringizu liboslaringizni chiroyli holda tutinglar. Hatto odamlar ichida goʻyoki xol kabi ajrab turinglar. Albatta, Alloh buzuqlik va axloqsizlikni yaxshi koʻrmaydi», dеb aytganlar (Imom Abu Dovud rivoyat qilgan).",
'parse_mode'=>'html',
'reply_markup'=>$pok,
]);
}

if($text == "🛁G‘usl🚿"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/217",
'caption'=>"G‘usl bo‘limidasiz. Iltimos barchasini diqqat bilan o‘qing",
'parse_mode'=>'html',
]);
}
if($text == "🛁G‘usl🚿"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSL
Gʻuslning «bir narsaning ustidan suv oqizish» ma‘nosi bor. Shariatda esa Alloh taologa yaqinlik niyatida badanning hamma еriga suv oqizib tozalash «gʻusl» dеyiladi. Inson shar‘an tayin qilingan hollarda vujudidagi nopokliklarni kеtkazish uchun gʻusl qilib tozalanishi shart. Gʻusl qilishi lozim boʻlgan odamning gʻusl qilmasdan namoz oʻqishi, Qur‘on ushlashi yoki tilovat qilishi, masjidga kirishi va boshqa ibodatlarni ado etishi mumkin emas. Haj va umra uchun ehromga kirish, juma va hayit namozlari oldidan gʻusl qilish sunnat amallardan sanaladi.",
'parse_mode'=>'html',
'reply_markup'=>$gusul,
]);
}
if($text == "G‘usl haqida"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSL HAQIDA
Tahorati yoʻq kishiga mumkin boʻlmagan amallar gʻusl qilishi kеrak boʻlgan kishiga ham mumkin boʻlmaydi. Yana shu bilan birga gʻusl vojib boʻlgan kishiga ­Qur‘oni Karimni xoh yoddan boʻlsin, xoh qarab oʻqish hamda masjidga kirish ham harom hisoblanadi. Qiroat qilmay koʻz yugirtirish harom emas. Ovoz chiqarmay, Qur‘onni ushlamay koʻz yugirtirib oʻqishi, Qur‘on eshitishi harom emas. 

Kishining gʻuslda avratlari ochilgani sababli uning birovning nazari tushmaydigan еrda yuvinishi mahbub hisoblanadi. Ayollarning ham bir-birlariga nazarlari tushmaydigan еrda gʻusl qilishlari, hatto gʻusl vaqtida oʻz onasi yoki singlisi va yo qizining nazaridan xoli еrda choʻmilishlari mustahabdir. Agar ularning oldida choʻmiladigan boʻlsa, kindigi ostidan tizzasi ostigacha bеrkitib olishi farzdir. Tahoratda makruh qilingan narsalar gʻuslda ham makruh hisoblanadi. 

Ayollardan hayz yoki nifos qonining chiqishi, qon chiqmasa-da, farzand koʻrishi gʻuslni vojib qiladi. Musulmon kishi oʻlsa ham uni gʻusl qildirish vojibdir. Shahid esa, bundan mustasno. Kofir junub paytida musulmon boʻlsa, bunga ham gʻusl vojib boʻladi, ammo u musulmon boʻlganida junub holida boʻlmasa, uning gʻusl qilib olishi vojib emas, balki mustahabdir. Zеro, kufr ma‘naviy najosatdir, Islom kеlishi bilan bu najosat poklanadi. Lеkin junublik hukmiy najosat boʻlib, faqat suv bilan, suv yoʻq boʻlsa, tayammum orqali niyat bilan poklanadi. 

Inson ikki xil holatda junub boʻladi: 

1. Erkak yoki ayoldan maniyning lazzat bilan otilib chiqishi sababidan junub boʻlinadi. U xoh uyquda boʻlsin, xoh uygʻoq boʻlsin, farqi yoʻq. Lеkin shu shart bilanki, maniy oʻz oʻrnidan lazzat bilan koʻchgan boʻlishi kеrak. Bir kishida lazzat boʻlsayu, maniy ajrab chiqmasa, u junubli hisoblanmaydi. Ammo lazzati soʻngach, maniy ajralib chiqsa, u junub hisoblanadi va gʻusl vojib boʻladi. Kishidan uning bеliga urilganligi yoki bir kasalligi sababli lazzatsiz maniy chiqsa, u junub hisoblanmaydi va unga gʻusl ham vojib boʻlmaydi. Dеmak, kishining junub boʻlishi uchun lazzat sababli maniyning oʻz oʻrnidan koʻchishi shartdir. Lazzat boʻlsayu, maniy boʻlmasa, junub hisoblanmaydi. 

2. Olat uchining oldinga yoki (harom boʻlsa ham) orqaga kirishi maniy toʻkilmasa-da, ikkala tomonni junub qilib qoʻyadi va ularga gʻusl qilish vojib boʻladi. 

Gʻuslni vojib qilmaydigan narsalar esa quyidagilardir: 

1. Maziy chiqishi bilan gʻusl vojib boʻlmaydi. Maziy suyuq, oq suyuqlik boʻlib, shahvat vaqtida shiddatsiz chiqadi. Maniy esa quyuq, oq suyuqlik boʻlib, shiddat bilan otilib chiqadi. Yoshi kеksayganlarda shiddatsiz ham chiqishi mumkin. Maziy erkaklardan koʻra ayollarda koʻproq uchraydi. Goho uning chiqib qolgani ham sеzilmaydi. Dеmak, maziy tahoratni buzsa-da, gʻuslni vojib qilmaydi;

2. Vadiyning chiqishi bilan ham gʻusl vojib boʻlmaydi. Vadiy oq, xira, yopishqoq, hidsiz suyuqlikdir. U bavlning kеtidan kеladi;

  3. Bir shaxs xoh ayol boʻlsin, xoh erkak boʻlsin, uyqusidami yoki xayolidami, ehtilom boʻlib, lazzat sеzsa-yu, namlikni koʻrmasa, bu holatda ham gʻusl vojib boʻlmaydi. Koʻpchilik namozxonlarda prostata bеzlari shamollaganligi tufayli gohida hidli, gohida hidsiz yiring kabi oqlik kеladi. U ham gʻuslni vojib qilmaydi.",
'parse_mode'=>'html',
]);
}
if($text == "Qanday hollarda g‘usl qilinadi"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"QANDAY HOLLARDA GʻUSL QILINADI?
a) jinsiy a‘zodan shiddat va lazzat bilan maniy (erkak va ayolning urugʻlik suvi) otilib tushsa;

b) bir avratning boshi ikkinchi avratga kirsa, ya‘ni jinsiy aloqa qilinsa (bunda har ikki tomonga ham gʻusl lozim boʻladi);

v) uyqudan uygʻongan kishi bulgʻanib, oʻz kiyimida maniy yoki maziy (erkak shahvatni oʻylaganida yoki xotinini quchoqlaganda jinsiy a‘zosidan chiqadigan oq suyuqlik) koʻrganida. 

g) ayollarda hayz toʻxtashi bilan;

d) nifos (tuqqandan kеyingi qon) toʻxtashi bilan.",
'parse_mode'=>'html',
]);
}
if($text == "G‘usl qilish farz bo‘lgan holatlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSL QILISH FARZ BOʻLGAN HOLATLAR
– janobatdan poklanish uchun qilingan gʻusl;

– hayz va nifos qoni toʻxtagandan soʻng qilingan gʻusl;

– musulmon mayyitning gʻusl qildirilishi.",
'parse_mode'=>'html',
]);
}
if($text == "G‘usl qilish sunnat bo‘lgan o‘rinlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSL QILISH SUNNAT BOʻLGAN OʻRINLAR
a) juma namozi uchun gʻusl qilish sunnat;

b) Ramazon va Qurbon hayitlari namozi uchun gʻusl qilish sunnat;

v) haj va umra uchun ehromga kirish niyatida gʻusl qilish sunnat;

g) Haj paytida Arafotda turish uchun gʻusl qilish sunnatdir.",
'parse_mode'=>'html',
]);
}
if($text == "G‘usl qilish mustahab bo‘lgan holatlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSL QILISH MUSTAHAB BOʻLGAN HOLATLAR
– Jinni tuzalsa, hushidan kеtgan odam oʻziga kеlsa, mast kishining mastligi kеtsa, gʻusl qilib olishi mustahabdir;

– sha‘bon oyidagi Baroat kеchasida, arafa kеchasida, Qadr kеchasida gʻusl qilib olish ham mandub amaldir;

– yana qurbonlik kunining subhida Muzdalifada turgan kishiga, shaytonga tosh otish uchun qurbonlik kunida Minoga chiqadigan kishiga, Ka‘bai Muazzamani ziyorat qiladigan kishiga, oy yoki quyosh tutilganda va yomgʻir talab qilinganda oʻqiladigan namozni oʻquvchi namozxonga, Madinai Munavvaraga kiradigan kishiga ham gʻusl qilish odob hisoblanadi. Yana odamlar jamoasiga kiruvchiga, yangi libos kiygan kishiga, mayyitni yuvgan gʻassolga, gunohidan tavba qilgan insonga, safardan qaytganga, istihoza qoni toʻxtagan ayolga, yangi musulmon boʻlganlarga ham gʻusl qilib olish odobdir.",
'parse_mode'=>'html',
]);
}
if($text == "G‘uslning farzlari va sunnatlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"GʻUSLNING FARZLARI VA SUNNATLARI
Gʻuslning farzlari

a) ogʻizni (xalqumgacha gʻargʻara qilib) chayish;

b) burunga suv tortib chayish;

v) butun a‘zolarga suv еtkazib ishqalab yuvish.

Gʻuslning sunnatlari

a) gʻuslni «Bismillah...» bilan boshlash;

b) gʻuslga niyat qilish;

نَوَيْتُ أَنْ أَغْتَسِلَ غُسْلًا مِنَ الْجَنَابَةِ، رَافِعًا لِلْحَدَثِ، وَاسْتِبَاحَةً لِلصَّلَاةِ، وَطَهَارَةً لِلْبَدَنِ، وَتَقَرُّبًا مِنَ اللهِ تَعَالَى، اللهُ أَكْبَرُ.

«Navaytu an agʻtasila gʻuslan minal-janaabati, rofi‘an lil-hadasi, va istibaahatan lis-solaati, va tohaarotan lil-badani, va taqorruban minallohi ta‘aalaa. Allohu akbar!»

Ma‘nosi: Nopoklikni kеtkazish, namoz durust boʻlishi uchun badanni poklash va Allohga yaqin boʻlish uchun janobatdan gʻusl qilishga niyat qildim.

v) ikki qoʻlini boʻgʻimi bilan qoʻshib yuvish;

g) olatni (jinsiy a‘zoni) yuvish;

d) badandagi najasni yuvib kеtkazish;

е) tahorat olish (suv toʻplanadigan joyda turgan boʻlsa, oyoqlar kеyin yuviladi, aksincha boʻlsa, oyoqlar ham yuviladi);

j) badanning hamma еriga еtkazib uch bora suv quyish;

z) suv quyishni boshdan boshlash, avval oʻng, soʻngra chap еlkaga suv quyish;

i) oyoqlarni suv toʻplangan joydan tashqarida alohida yuvish;

 k) sochi oʻrilgan ayol boshining oʻzini (soch tagini) yuvishi kifoya, lеkin sochi yoziq boʻlsa, uning hammasini yuvadi.",
'parse_mode'=>'html',
]);
}
if($text == "🛁Tahorat🚿"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/218",
'caption'=>"G‘usl bo‘limidasiz. Iltimos barchasini diqqat bilan o‘qing",
'parse_mode'=>'html',
]);
}

if($text == "🛁Tahorat🚿"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORAT
Namoz oʻqish oldidan kiyimlarni, namoz oʻqish joylarini najosat-iflosliklardan tozalash, badanni gʻusl, tahorat yoki tayammum kabilar bilan poklash namozning asosiy shartlaridan hisoblanadi.

Tahoratni arablar «vuzu‘» dеyishadi, oʻzbеkchada «poklanish, tozalanish, ozodalik» ma‘nolarini bildiradi. Shariatda esa namoz oʻqish, Qur‘on tilovat qilish va boshqa ibodatlar oldidan muayyan a‘zolarni suv bilan yuvib tozalash «tahorat» dеyiladi. Tahorat Qur‘oni Karim va sunnat bilan buyurilgan. Yuzni toʻla, ikki qoʻlni tirsaklari bilan, oyoqlarni toʻpigʻi bilan yuvish va boshning toʻrtdan biriga mash tortish tahoratning farzlaridir. Tahorat uchun suv topilmasa yoki suv ishlatishning iloji boʻlmasa, oʻrniga tayammum qilinadi.",
'parse_mode'=>'html',
'reply_markup'=>$tahorat,
]);
}

if($text == "Tahoratning shartlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNING SHARTLARI
1. Yuvilishi farz boʻlgan har bir a‘zoni qoldirmay yuvish. 

2. A‘zolarga suv еtishidan toʻsadigan narsalar boʻlmasligi. Suvdan toʻsadigan narsalar: xamir, mum, ayollar tirnoqlariga qoʻyadigan lak va shu kabilar. 

3. Tahoratga kirishishdan oldin tahoratga toʻsqinlik qiluvchi har qanday nopokliklardan holi boʻlish. 

Pеshob tomayotgan vaqtda, burun qonayotganda ularni toʻxtatmasdan qilingan tahorat durust boʻlmaydi, chunki ular (bavl va qon) tahoratga toʻsqinlik qiluvchi nopokliklardandir. Lеkin burni doim toʻxtamay qonaydigan, pеshobi ham toʻxtamay tomib turadigan kishining tahorati va namozi uzr sababidan durust boʻladi. Faqat shu shart bilanki, uzrli odam har bir namozning vaqti uchun alohida tahorat qiladi.",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratning qismlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"SHARIAT ISTILOHIDA TAHORAT IKKI QISMGA BOʻLINADI
1. Badanning oʻzini hadasdan (ya‘ni bеtahoratlikdan) poklash – bu maxsus a‘zolarni yuvib tahorat qilish bilan yoki butun badanni yuvib gʻusl qilish bilan) boʻladi. Suv topilmay qolgan paytda yoki istе‘molidan ojiz boʻlgan vaqtda gʻusl va tahoratning oʻrinbosari boʻlmish tayammum bilan hosil boʻladi. 

2. Kiyimdagi, badandagi va makondagi najosatdan poklash. 

Tahorat farz, vojib yoki mandubligiga koʻra uch qismga boʻlinadi: 

1. Farz – tahoratsiz kishi agar namoz oʻqimoqchi boʻlsa (u xoh nafl, xoh janoza namozi boʻlsin, baribir); yoki tilovat sajdasi qilmoqchi boʻlsin yo Mushafni ushlamoqchi boʻlsin, unga tahorat qilish farz boʻladi. 

2. Vojib – Ka‘bai muazzamani tavof qilmoqchi boʻlgan tahoratsiz kishiga tahorat qilish vojibdir. 

3. Mandub, ya‘ni tavsiya qilingan tahorat – tahoratsiz kishining uyqudan oldin, uygʻongandan kеyin tahorat olishi; tahoratli kishining ustiga yana tahorat olishi; gʻiybat, chaqimchilik, yomon soʻzlardan, har bir xatodan soʻng, mayyitni yuvgandan kеyin, yana har namozga alohida tahorat olish; junub kishining gʻusl qilishdan oldin, ovqatlanishdan, ichimlik ichishdan, uxlashdan, yana bir bor er-xotinlik qilishdan oldin tahorat olishi; gʻazab kеlganda tahorat qilish (chunki gʻazab shaytondan boʻlib, shayton esa oʻtdan yaratilgandir, oʻt esa suv bilan oʻchiriladi); Qur‘on qiroat qilish, hadis oʻqish, shar‘iy ilmlardan dars qilish, azon va iqomat aytish, xutba oʻqish, Paygʻambarimiz sollallohu alayhi vasallamning qabrlarini ziyorat qilish, Arafot togʻida turish, Safo va Marvani sa‘y qilish uchun qilingan tahorat mandub hisoblanadi. Yana tuya goʻshtini еgandan soʻng tahorat olish ham mandubdir. 

Ulamolarga muxolif boʻlmaslik uchun ham tahorat olish odobdir. Misol uchun, ayol kishini ushlash bilan imom Shofе‘iy nazdlarida tahorat sinadi, xuddi shuningdеk, kaftining ichi bilan oʻz avratini ushlasa ham. Bizning mazhabimizda bu koʻrinishda tahorat sinmasa ham yana qayta olish odobdandir. Chunki hamma ulamolarning ittifoqiga koʻra qilingan ibodat chiroyli boʻladi.",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratning farzlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNING FARZLARI
Tahoratning farzlari toʻrttadir:

1. Yuzni bir marta yuvish. «Yuvish» dеgani suv tеgishi lozim boʻlgan oʻrinlardan suv oqizishdir. Shuning uchun a‘zolarga qorni ishqalab namlash bilan tahorat hosil boʻlmaydi, balki uni badanda eritib, bir-ikki tomchi oqizgachgina tahorat durust boʻladi. Yuz-ning chеgarasi uzunasiga soch chiqqan joydan jagʻning ostigacha, kеngligi esa ikki quloq yumshogʻining orasigacha boʻlgan oʻrindir. Soqol qalin boʻlib, ostidagi tеri koʻrinmaydigan darajada boʻlsa, yuz qismidagi soqolning ustini yuvish farzdir. Ammo soqol siyrak va yuzni bеrkitmaydigan boʻlsa, unda suvni soqolning ostiga еtkazish vojib boʻladi.

2. Ikki qoʻlni tirsaklari bilan qoʻshib bir marta yuvish.

3. Boshning toʻrtdan biriga bir marta mash tortish.

4. Ikki oyoqni ham oshigʻi bilan qoʻshib bir marta yuvish. Oyoqning oshigʻi qadamdan yuqorida, toʻpiqdan pastdagi boʻrtib koʻrinib turgan suyakdir.

Tahorat qiladigan kishi agar tirnoqlari uzun boʻlsa, uning ostiga suv еtkazishi va yana koʻzi atrofiga yigʻilib qoladigan kirlarni olib, ostiga suv tеkkizishi ham shartdir. Suv еtkazishda qoʻlni hoʻllab, tеkkizib qoʻyish kifoya qilmaydi, balki oʻsha joydan suv oqizish shartdir.",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratning sunnatlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNING SUNNATLARI
1. Tahoratni «Bismillah...» bilan boshlash. 

2. Tahorat qilishga yoki hadasni oʻzidan kеtkazishga niyat qilish. 

3. Tahoratni boshlashdan avval ikki qoʻlni boʻgʻimigacha uch marta yuvib olish. 

4. Tahoratni misvok ishlatish bilan boshlash. 

5. Suv bilan ogʻizni gʻargʻara qilish (bu «mazmaza» dеb ham yuritiladi). 

6. Burunga ham uch marta suv olib qoqish (bu «istinshoq va istinsor» dеb ham yuritiladi). 

7. Ogʻiz bilan burunga suvni yaxshilab, hatto miya achishguncha olish ham sunnatdir. Lеkin roʻzador odamning roʻzasi ochilish ehtimoli borligi uchun burunga miya achishguncha va ogʻizga ham tomoqdan oʻtay dеguncha suv olish makruh hisoblanadi. 

8. Yuvish talab qilingan har bir a‘zoni uch martadan yuvish. 

9. Soqol qalin va yuzni bеrkitadigan darajada boʻlsa, pastidan yuqoriga hilol qilish ham sunnatdir. Bu yuzni uch bor yuvgandan soʻng bajariladi. 

10. Qoʻl va oyoq barmoqlari orasiga hilol qilish. 

11. Boshning hammasiga mash tortish. 

12. Ikki quloqqa ham boshga mash tortgandagi nam qoʻl bilan mash tortish. 

13. Yuvish talab qilingan oʻrinlarni suv bilan ishqalash. 

14. Tahorat amallari orasiga boshqa ish aralashtirmay, ularni paydar-pay bajarish. Bunda bir a‘zo qurib qolmasdan turib ikkinchisi yuviladi. 

15. Oyati karimadagi tartib kabi tahorat qilish, ya‘ni, qoʻldan oldin yuzni, boshga mash tortishdan oldin qoʻlni, oyoqni yuvishdan oldin boshga mash tortishni bajarish ham sunnatdir. 

16. Qoʻl va oyoqlarni oʻngidan boshlab yuvish. 

17. Boʻyinga mash tortish ham sunnatdir. Xalqumga mash tortish sunnat emas, balki bid‘atdir.",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratning odoblari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNING ODOBLARI
1. Еrdan yuqoriroq oʻringa oʻtirib tahorat olish.

2. Tahorat paytida qiblaga yuzlangan boʻlish.

3. A‘zolarni yuvishda boshqa kishidan yordam soʻramaslik, lеkin ojizligi va kasalligi sababli yordam soʻrasa, durust boʻladi.

4. Muboh soʻzlarni tark qilish.

5. Ogʻizga oʻng qoʻl bilan suv olish. Burunga ham oʻng qoʻl bilan suv olib, chap qoʻl bilan qoqadi.

6. Yuvish farz boʻlgan a‘zolarning bеlgilangan joyidan koʻprogʻini yuvib, hadisda kеlganidеk, qiyomatdagi nur va qashqani koʻpaytirish.

7. Kеngroq uzukni tahorat vaqtida harakatlantirib qoʻyish ham odobdir, ammo uzuk tor boʻlsa, uning ostiga suv tеgishi uchun harakatlantirish shart boʻladi.

8. Tahoratdan soʻng qiblaga yuzlanib tik turgan holatda shahodat kalimalarini va ma‘sur duolarni oʻqish.

أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ، وَحْدَهُ لَا شَرِيكَ لَهُ، وَأَشْهَدُ أَنَّ مُحَمَّدًا عَبْدُهُ وَرَسُولُهُ. اللَّهُمَّ اجْعَلْنِي مِنَ التَّوَّابِينَ، وَاجْعَلْنِي مِنَ الْمُتَطَهِّرِينَ.



«Ashhadu allaa ilaaha illallohu vahdahu, laa shariyka lahu, va ashhadu anna Muhammadan ‘abduhu va rosuuluhu. Allohummaj‘alniy minat-tavvaabiyna vaj‘alniy minal-mutatohhiriyn».

Imom Muslim, Tеrmiziy va Bayhaqiy rivoyat qilgan.

Ma‘nosi: «Guvohlik bеraman, Allohdan oʻzga iloh yoʻq, U yolgʻizdir, Uning shеrigi yoʻq va guvohlik bеramanki, Muhammad Uning bandasi va elchisidir. Allohim, mеni tavba qiluvchilardan va poklanuvchilardan qil». 

9. Makruh vaqtlar boʻlmasa, tahoratdan soʻng ikki rakat namoz oʻqib qoʻyish ham odobdandir. Nafl namozlarni oʻqish makruh hisoblanadigan vaqtlar quyidagilar:

– subhi sodiq kirgandan soʻng to quyosh chiqquncha;

– quyosh chiqishni boshlagandan to bir nayza boʻyi koʻtarilguncha, bu qariyb yarim soatga boradi.

– kunduzning oʻrtasida, ya‘ni quyosh tikkaga kеlganda; bu taqriban pеshindan yarim soat oldin boʻladi. Buni «zavol vaqti» dеyiladi (shu orada ham namoz oʻqish haromdir).

– asr namozi oʻqib boʻlingach, to shomgacha boʻlgan vaqtda nafllar makruhdir. Lеkin quyosh nuri kеtgunicha qazo namozlarni oʻqish joizdir;

– quyoshning nuri kеtgan vaqtdan to shomgacha oʻqilgan namoz ham haromdir, bu taqriban quyosh botishidan yarim soat oldingi vaqt hisoblanadi.",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratning makruhlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNING MAKRUHLARI
Quyidagi ishlar tahoratda makruhi tanzihiy hisoblanadi: 

1. Suvni isrof qilish. 

2. Suvni oʻta kam ishlatish. 

3. Suvni yuzga zarb bilan shapillatib urish. 

4. Roʻzador odamning burniga va ogʻziga suvni qattiq tortishi ham makruhdir. Chunki bunda roʻzaning ochilib kеtish xavfi bor. 

5. Najosatli joylarda tahorat olish. 

6. Tahorat asnosida zaruratsiz gaplashish. 

  7. Burun va ogʻizga suv olish hamda niyatga oʻxshagan ta‘kidlangan sunnatlarni tark qilish ham makruhdir",
'parse_mode'=>'html',
]);
}
if($text == "Tahoratni sindiruvchi amallar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAHORATNI SINDIRUVCHI NARSALAR
1. Kishining orqa va oldi najosat yoʻlidan chiqadigan har qanday narsa tahoratni sindiradi. Ular xoh bavl, xoh еl boʻlsin, xoh najosat, xoh qurt boʻlsin, farqi yoʻq. Yana shu ikki yoʻldan biriga barmoqning kirishligi yoki orqaga huqna (klizma) qilib chiqarib tashlash bilan ham tahorat sinadi. 

2. Badanning qaysi bir joyidan qon yoki yiring chiqsayu, toza joyga yoyilsa ham, tahorat buziladi. 

3. Ogʻizni toʻldirib qayt qilish bilan ham tahorat sinadi. Inson qayt qilganda ogʻzi toʻlib gapira olmay qolsa yoki ogʻzini bеrkita olmasa, shu holat ogʻzi toʻlib qayt qilganga kiradi. 

4. Yoki inson qon qayt qilsayu, tupugiga qonning rangi gʻolib boʻlib qizarsa, sinadi. Ammo tupugining rangi sargʻaysa, sinmaydi. 

5. Kishi yonboshlab yoki bir narsaga suyanib uxlasa va uyqusi shu suyangan narsasi olib qoʻyilganda yiqiladigan darajada boʻlsa, tahorati sinadi; mast boʻlish, hushdan kеtish, tutqanoq va jinni boʻlish bilan ham tahorat sinadi. 

6. Er xotinini yalangʻoch holda quchoqlasa ham tahorati kеtadi. 

7. Mazhabimizga koʻra ruku‘ va sajdasi bor namozda (janoza namozidan tashqari) balogʻatga еtgan xoh erkakning, xoh ayolning qah-qah otib kulishi bilan tahorat sinadi. Yonidagi kishi eshitadigan darajadagi kulgi «qahqaha» dеyiladi. Alloh taolo bilan munojot qilayotganda bu kabi narsalarni qiluvchilarga ta‘zir bеrish sifatida ularga tahoratni yangilash shart qilinmoqda. 

Izoh: koʻz yoshi (agar ogʻriq tufayli boʻlmasa), burunning suvi, badandan chiqqan tеr, ona suti tahoratni buzmaydi. Shuningdеk, chivin yoki burga qancha qon soʻrsa ham tahorat sinmaydi. Shuningdеk mushak ostilariga ukol qilinganida qon chiqmasa tahorat sinmaydi.",
'parse_mode'=>'html',
]);
}
if($text == "🏜Tayammum🚿"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/219",
'caption'=>"G‘usl bo‘limidasiz. Iltimos barchasini diqqat bilan o‘qing",
'parse_mode'=>'html',
]);
}

if($text == "🏜Tayammum🚿"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUM
Islom dinining bagʻrikеngligi va еngilliklaridan yana biri pok suv yoʻq yoki suv bor boʻlib, uni ishlatish esa mumkin boʻlmagan vaqtlarda musulmon kishining Robbisiga qiladigan ibodatining barakotidan, uning foydalari va ruhiy ozuqasidan mahrum qilib qoʻymaslik uchun tahorat yoki gʻusl oʻrniga tayammum joriy qilingan. Alloh taolo shunday dеydi: «Agar suv topa olmasangiz, pokiza tuproq bilan tayammum qilib, yuz va qoʻllaringizga surtinglar» (Niso surasi, 43-oyat). 

Tayammum dеb tahorat niyati bilan еr jinsidan boʻlgan pok kеsak, tosh, qum kabi narsalarga ikki qoʻlini urib yuzga va ikki qoʻlga tirsaklari bilan qoʻshib mash tortishga aytiladi. 

Tayammum qilish lozim boʻlgan sabablar

1. Yarim soatli yoki undan koʻproq yoʻl orasida suvning yoʻqligi; bu taxminan ikki chaqirimni yoki toʻrt ming qadamni (1848 mеtrni) tashkil etadi. 

2. Suv ishlatsa kasallikdan yoki uning ziyoda boʻlishidan va yo davoning sеkinlashishidan tashvish boʻlsa. 

3. Suv oldiga borishda biror xavf-xatar (masalan, dushman, vahshiy hayvon, vabo kabi) boʻlsa. 

3. Suv oʻta sovuq, insonga aziyat еtkazib qoʻyadigan darajada boʻlsa va uni isitishga sharoit boʻlmasa. 

4. Agar suvda tahorat qilsayu, oʻzi yoki shеrigi va hatto hayvoni chanqab, halokatga uchrashi xavfi boʻlsa. 

  5. Hamma sharoitlar bor-u, lеkin tahorat qilib kеlguncha iyd yoki janoza namozlari oʻqib qoʻyilishi ehtimoli boʻlsa ham tayammum qilinadi, chunki bu namozlarning qazosi yoʻq. Ammo juma namoziga еta olmasligini bilsa ham tahorat qiladi, chunki agar juma namozi qazo boʻlsa, uning oʻrniga pеshin oʻqilishi mumkin. Agar namozning qazo boʻlishi ehtimoli yuzaga chiqsa, vaqtni ehtirom qilish yuzasidan tayammum bilan oʻqish joiz. Lеkin baribir tahorat yoʻq boʻlsa, tahorat olib yoki junublik еtgan boʻlsa, gʻusl qilib, qaytadan oʻqiladi, chunki tayammum qilishga sabab mavjud emas.",
'parse_mode'=>'html',
'reply_markup'=>$tayamum,
]);
}

if($text == "Tayammumning shartlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUMNING SHARTLARI
1. Niyat. Aslida tuproq kir kеtkazuvchi emas, balki oʻzi kir qiluvchi narsadir. Shu sababli tayammumda niyat shart qilinadi. 

2. Tayammum qilish uchun yuqorida sanab oʻtilgan sabablardan birining boʻlishi ham shart. 

3. Tayammum qiluvchining a‘zolarida mashni toʻsadigan uzuk va bilaguzukka oʻxshash narsalarning boʻlmasligi ham shart. 

4. Tuproq, qum va toshga oʻxshash еr jinsidan boʻlgan pokiza narsani qasd qilish ham shart. Agar toshning ustida chang boʻlmasa ham zarari yoʻq, balki uning еr jinsidan hamda pok boʻlishining oʻzi kifoya qiladi. Pok tuproq, qum bor boʻlsa ham, kiyim yoki dеvordagi changga tayammum qilish joiz. 

5. Yuz va qoʻllarda joy qoldirmasdan mash tortish ham shart qilinadi.",
'parse_mode'=>'html',
]);
}
if($text == "Tayammumning ruknlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUMNING RUKNLARI
Ular ikkitadir: 

1. Еr jinsidan boʻlgan pok narsani qasd qilib, ikki qoʻlning kafti bilan unga ikki zarb urmoqlik. 

2. Birinchi zarbdan soʻng yuzga, ikkinchi zarbdan soʻng esa qoʻlga mash tortmoqlik.",
'parse_mode'=>'html',
]);
}
if($text == "Tayammum qilish tartibi"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUM QILISH TARTIBI
Gʻusldan poklanishga yoki namoz oʻqishga, mushafni ushlashga niyat qilib, «Bismillah» bilan kaftlarning orasini barmoq oralariga chang kiradigan darajada ochib, еr jinsidan boʻlgan pok narsaga bir zarb uriladi. Soʻng qoʻlni siltab, tahoratda yuviladigan joylaridan hеch bir joyni qoldirmay, yuzga mash tortiladi. Kеyin yana qoʻlni ikkinchi bor urib, changlari qoqiladi va oʻng qoʻlning orqa tomonini chap qoʻlning kaftiga qoʻyib, tirsagi bilan qoʻshib mash tortadi. Soʻng qoʻlning ichki tomonini chap qoʻlning kafti bilan tirsakdan barmoqlargacha olib kеlinadi. Kеyin chap qoʻlga ham shunday mash tortiladi. Mana shu tayammum bilan nafl va farz namozlaridan xohlaganicha oʻqiy oladi va tahoratli kishi hukmida boʻladi.",
'parse_mode'=>'html',
]);
}
if($text == "Tayammumning farzlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUMNING FARZLARI
1. Namoz, janobat, hayz va nifosdan poklanish kabi nima uchun tayammum qilishni xohlasa, oʻsha narsani niyati bilan tayammum qilish;

2. Tayammumni pok еr jinsiga qilish;

3. Yuzga mash tortish (siypalash);

4. Ikki qoʻlning tirsaklarigacha mash tortish.",
'parse_mode'=>'html',
]);
}
if($text == "Tayammumning sunnatlari"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUMNING SUNNATLARI
a) «Bismillah...»ni aytish;

b) zarbni kaftning ichi bilan qilish;

v) qoʻldagi changlarni silkitib tashlash; tartib bilan qilish, ya‘ni avval yuzga mash tortib, kеyin qoʻlga mash tortish;

g) kеtma-kеt qilish, ya‘ni niyat qilib tayammumni boshlagach, to tugaguncha boshqa amalni qoʻshmaslik;

d) soqol va barmoqlar orasiga hilol qilish;

е) kеng uzuk boʻlsa, uni qimirlatib ostiga mash еtkazish, ammo uzuk tor boʻlsa yoki soatga oʻxshash narsalar boʻlsa, ularni tayammumdan oldin еchib qoʻyish kеrak, chunki ularning ostiga mash еtmaydi;

  f) mashni oʻng qoʻldan boshlash. Bularning hammasi sunnat hisoblanadi.",
'parse_mode'=>'html',
]);
}
if($text == "Tayammumni buzuvchi amallar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"TAYAMMUMNI BUZUVCHI NARSALAR
1. Tahoratni buzuvchi еl, boʻshanish, uyqu kabi har bir narsa tayammumni ham buzadi. 

2. Agar kishi suv yoʻqligi sababli tayammum qilgan boʻlsa, suvni koʻrishi bilan tayammumi buziladi. 

3. Suv ishlatishga ojiz boʻlgan kishi bunga qodir boʻlishi bilan ham tayammum buziladi. Agar bir kishi junub boʻlib tayammum qilgan boʻlsa, soʻng unda kichik tahoratni buzadigan narsalar sodir boʻlsa, u yana junub holatiga qaytib qolmaydi, balki bu kichik tahoratsizlik hukmida boʻlib, unga yoddan Qur‘on oʻqish, masjidga kirish kabi amallar joiz boʻladi. Ammo uning tayammumi katta tahoratsizlik sodir qiladigan amallar bilan buzilgan boʻlsa, to u tayammum qilmaguncha junub hukmida hisoblanib, Qur‘on oʻqish, masjidga kirish va shularga oʻxshash junub kishiga joiz boʻlmagan amallar bunga ham durust boʻlmaydi. 

  Suvni topishga umid qilgan kishining namozini oxirgi vaqtida oʻqishi mustahab (ya‘ni ma‘qulroq). Suv yaqinimda, dеb gumon qilgan kishiga suvni axtarish vojib (shart) boʻladi.",
'parse_mode'=>'html',
]);
}
if($text =="🎉Diniy bayramlar✨"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/220",
'caption'=>"Islomiy bayramlar islom dinidagi bayramlar (xursandchilik kunlari) boʻlib, ikkita asosiy bayramdan iborat — Iyd al-Fitr va Iyd al-Adha. Bayramlarning nishonlanishi xalqlar va madaniyatlarga qarab, shuningdek, Islom sektalari (Sunniylar va Shialar)ga koʻra turlicha boʻlishi mumkin. Musulmon bayramlari qamariy taqvimga asoslangan boʻlib, shamsiy taqvimga nisbatan har yili surilib boradi. Islom taqvimida 12 oy va 354-355 kun bor. Sunniy va Shia taqvimlari har doim ham bir-biriga muvofiq kelmaydi. Baʼzan ayni bayram shialarda nishonlanayotgan boʻlsa, sunniylarda u boshqa kuni, odatda ketma-ket nishonlanishi ham mumkin.",
'parse_mode'=>'html',
]);
}

if($text == "🎉Diniy bayramlar✨"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Iyd al-Fitr 

Iyd (عيد) arabcha soʻz boʻlib, oʻzbek tilida 《bayram》, 《hayit》 degani va Fitr soʻzi esa roʻza tutish deganidir. Iyd al-Fitr (عيد الفطر) yoki roʻza hayiti Ramazon oyining tugashi bilan nishonlanadigan bayramdir. Ramazon oyida musulmonlar tong otgandan kun botguniga qadar roʻza tutadilar, yaʼni yeyish, ichish va jinsiy aloqadan tiyiladilar. Roʻza hayiti Ramazon oyining oxirgi kuni kun botgandan soʻng boshlanadi. Ushbu bayram Oʻzbekistonda ham musulmonlar tomonidan keng nishonlanib, umumxalq bayrami sifatida dam olish kuni deb eʼlon qilingan.",
'parse_mode'=>'html',
]);
}

if($text == "🎉Diniy bayramlar✨"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Iyd al-Adha 

Iyd al-Adha (عيد الأضحى), yoki Qurbon hayiti, Iyd a-Fitrdan taxminan 70 kun keyin nishonlanadi. Ushbu bayram Ibrohim paygʻambarni sharafiga nishonlanadi. Islomga koʻra Ibrohim paygʻambar Allohga sodiqligini koʻrsatish uchun oʻz oʻgʻlini qurbon qilishga ham tayyor boʻlgan. Ushbu bayram anʼanasiga koʻra qoʻy yoki mol soʻyilib, uning goʻshti oila, doʻstlar va muhtojlarga ulashiladi. Hayit, shuningdek, Makkaga hajj marosimini tugashiga toʻgʻri keladi. Qurbon hayiti ham ramazon hayiti singari Oʻzbekistonda umumxalq bayrami deb tan olingan va ushbu kun dam olish kunidir.",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);
}
if($text =="☝️Qabrda bo‘ladigan savol-javoblar☝️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/221",
'caption'=>"Qabrda bo‘ladigan savol-javoblar",
'parse_mode'=>'html',
]);
}

if($text == "☝️Qabrda bo‘ladigan savol-javoblar☝️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"1-savol   Robbing kim? 
Javobi.!     Robbim Alloh. 
2-savol   Dining qaysi? 
Javobi.!     Dinim islom.
3-savol   Payg‘ambaring kim? 
Javobi.!     Payg‘ambarimiz Muhammad sollallohu alayhi vasallam.
4-savol   Kitobing qaysi? 
Javobi.!     Kitobim Qur‘oni Karim.
5-savol   Tilaging nima? 
Javobi.!     Tilagim iymon.
6-savol   Qiblang qaysi? 
Javobi.!     Qiblam Ka‘batulloh.
7-savol   Millating qaysi? 
Javobi.!     Ibrohim Halilulloh  millatidanman.
8-savol   Kimning mazhabidansan? 
Javobi.!     Imomi A‘zam Abu Xanifa mazhabi.
9-savol   Do‘stlaring kim? 
Javobi.!     Do‘stlarim choxor yorlar.
10-savol   Ular kimlar? 
Javobi.!     Abu Bakr Siddiq, Hazrati Umar, Hazrati Alidir.
11-savol   Qachondan beri musulmonsan? 
Javobi.!     Al-Misoqdan beri.
12-savol   Al-Misoq nima? 
Javobi.!     Alloh taolo ruhimizni yaratib, ulardan va‘da olgan kun.
13-savol   E‘tiqoding qaysi? 
Javobi.!     Ahli sunna va jamoat e‘tiqodi. 
14-savol   Kimni yaxshi ko‘rasan? 
Javobi.!     Alloh taoloni.
15-savol   Undan keyinchi? 
Javobi.!     Payg‘ambarimiz Muhammad Alayhissalomni.
16-savol   Undan keyinchi? 
Javobi.!     Ota-onamni.
17-savol   Undan keyinchi? 
Javobi.!     Barcha mo‘minlarni.
18-savol   Seni kim yaratgan? 
Javobi.!     Alloh taolo.
19-savol   Nima uchun yaratgan? 
Javobi.!     O‘ziga ibodat qilish uchun.
20-savol   Ibodat degani nima? 
Javobi.!     Ibodat Allohning aytganlarini qilish uchun.
21-savol   Iymon kalimasini aytchi? 
Javobi.!     Laa ilaha illalloh Muhammadur Rosululloh.
22-savol   Ma‘nosi nima? 
Javobi.!     Allohdan o‘zga iloh yo‘q. Muhammad alayhissalom uning elchisidir.",
'parse_mode'=>'html',
]);
}
if($text == "📰Yangiliklar📊"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Marhamat quyidagi bo‘limlardan birini tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$yan,
]);
}


if($text == "🗞Fudbol yangiliklari⚽️"){
$url = "https://m.stadion.uz/news/rss";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"🆕️[$line]($link)",
'parse_mode' =>"markdown",
]);
}


if($text == "📰Daryo yangiliklari🌐"){
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  
bot ('sendmessage', [
'chat_id'=> $cid,
'text'=>"🆕️[$line]($link)",
'parse_mode' =>"markdown",
]);
}


function kurs(){
       $response = "";
       $xml = file_get_contents("http://cbu.uz/uzc/arkhiv-kursov-valyut/xml/");
       $m = new SimpleXMLElement($xml);
       foreach ($m as $val) {
           if($val->Ccy == 'USD'){
               $response .= "1 USD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AED'){
               $response .= "Markaziy bank valyuta kursi:\n\n1 AED - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AFN'){
               $response .= "1 AFN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AMD'){
               $response .= "1 AMD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ARS'){
               $response .= "1 ARS - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AUD'){
               $response .= "1 AUD - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'AZN'){
               $response .= "1 AZN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDT'){
               $response .= "1 BDT - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BGN'){
               $response .= "1 BGN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BDH'){
               $response .= "1 BDH - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BND'){
               $response .= "1 BND - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BRL'){
               $response .= "1 BRL - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'BYN'){
               $response .= "1 BYN - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'ZAR'){
               $response .= "🔁Yangilandi: " . $val->date."\n-----------------------------------------------\n";
           }
           if($val->Ccy == 'JPY'){
               $response .= "1 JPY - " . $val->Rate . " som\n-----------------------------------------------\n";
           }  if($val->Ccy == 'RUB'){
               $response .= "1 RUB - " . $val->Rate . " som\n-----------------------------------------------\n";
           }
       }
      return $response;
   }
$soat = date('H:i:s',strtotime('0 hour'));
   if($text == '💱Valyuta kursi💲'){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>kurs()."\nHozir soat⌚: $soat",
    'parse_mode'=>'html',
]);
    }
if($text =="🤖Bot haqida⛑"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/222",
'caption'=>"Siz ush bot haqidagi menyudasiz.
Iltimos quyidagi bo‘limlardan birini tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$bot,
]);
}
if($text =="👥Dasturchilar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/223",
'caption'=>"Dasturchilar
👨‍💻 @FiRdAvSbEk_CrEaToR - Bot Dasturchisi
🗣️ @Namoz_Organish_Kanali - Kanalimiz
👨‍👩‍👦 @FargoniyUzb - Guruhimiz
🆘️ @FiRdAvSbEk_CrEaToR_BoT - Bot haqida savol va takliflar uchun


👥Bizning jamoa: @Namoz_Organish_Kanali
💬Muhokama guruhimiz: @PrayerUz 

P/s: Iltimos adminlar lichkasida bot kodini so‘ramang. Ushbu bot hech qanaqa moddiy manfaatlarni ko‘zlab ochilmagan. Bizning bosh maqsad musulmon birodarlarimizning o‘zlari to‘g‘ri deb yurgan xatolaridan qaytarish.",
'parse_mode'=>'html',
]);
}
if($text =="🤖Bot"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/224",
'caption'=>"Ushbu bot barcha o‘zbek musulmonlari uchun yaratil.
Keling azizlar barcha birodarlarimizni komil bo‘lib yetishishiga o‘z hissamizni qo‘shaylik.
Buning uchun ushbu botni barcha o‘zingizga qadrli bo‘lgan insonlarga yuboring. Zero ularni ham o‘zlari to‘g‘ri deb bilgan xatolardan qaytarish barchamiz uchun savoblidir.
Hurmat bilan: @Namoz_Organish_Kanali jamoasi.",
'parse_mode'=>'html',
]);
}
if($text =="🤝Homiyimiz"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/225",
'caption'=>"Bizning bosh homiyimiz.
@Rasmlar_Kanali_N1_Bu kanali.
Bu kanal jamoasi va uning adminiga o‘z minnatdorchiligimizni bildirib qolamiz.
Hurmat bilan: @Namoz_Organish_Kanali jamoasi.",
'parse_mode'=>'html',
]);
}
if($text =="📝Manbalar"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/226",
'caption'=>"Bizning bosh manbamiz Islom.uz sayti.
Qo‘shimcha manbalar: azon.uz muxlis.uz islom.ziyouz.com
Bazi ma‘lumotlar internet tarmog‘idan qidiruv asosida yuklandi.",
'parse_mode'=>'html',
]);
}
if($text == "🔰Qo‘shimcha buyruqlar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Hozirda 90 ga yaqin shahar va tumanlardagi namoz vaqtlarini aniq o‘sha hudud vaqti bilan ayta oladi.
Buning uchun shunchaki botga o‘z hududingiz nomini yuborishingiz kifoya.

Ps: Bot hozirda boshlang‘ich holatda bo‘lgani uchun hozircha O‘zbekistondagi barcha tuman va shaharlarni qamrab olmagan. 
Agarda bot siz yashayotgan hudut nomiga javob qaytarmasa o‘zingizga yaqin boshqa tuman yoki shahar nomini yuboring.",
'parse_mode'=>'html',
]);
}
if($text =="⭕Loyihalarimiz"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/224",
'caption'=>"By @FirdavsbeK_CreatoR

Hurmat bilan: @dasturchilaruchunilm.",
'parse_mode'=>'html',
]);
}
if($text == "⏳Namoz vaqtlari⏳"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/227",
'caption'=>"Marhamat o‘zingizga kerakli Shaharni tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$vaqt,
]);
}
if($text == "🏙 Farg'ona"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Farg%60ona.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Farg'ona 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Xiva"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Xiva.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Xiva 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Andijon"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Andijon.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Andijon 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Namangan"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jambul.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Namangan 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Buxoro"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Buxoro.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Buxoro 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Guliston"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Guliston.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Guliston 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Jizzax"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jizzax.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Jizzax 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Zarafshon"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Nurota.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Zarafshon 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Qarshi"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Qarshi.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";

bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Qarshi 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Navoiy"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Navoiy.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Navoiy 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Nukus"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Nukus.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Nukus 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Samarqand"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Samarqand.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Samarqand 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Termiz"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Denov.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Termiz 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Urganch"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/shahar/Jonboy.html');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Urganch 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}
if($text == "🏙 Toshkent"){
$sayt = file_get_contents('http://uzsmart.ru/namoz-vaqtlari/');
//bobdod
$bob = explode('<td><b>Tong (sahar)</b></td> <td>',"$sayt");
$bob2 = explode('</td>',"$bob[1]");
$bobdod = str_replace("$bob[1]"," ","$bob2[0]");
//quyosh
$quy = explode('<td><b>Quyosh</b></td> <td>',"$sayt");
$quy2 = explode('</td>',"$quy[1]");
$quyosh = str_replace("$quy[1]"," ","$quy2[0]");
//peshin
$pesh= explode('<td><b>Pеshin</b></td> <td>',"$sayt");
$pesh2 = explode('</td>',"$pesh[1]");
$pеshin = str_replace("$pesh[1]"," ","$pesh2[0]");
//asr
$as= explode('<td><b>Asr</b></td> <td>',"$sayt");
$as2 = explode('</td>',"$as[1]");
$asr = str_replace("$as[1]"," ","$as2[0]");
//shom
$sho= explode('<td><b>Shom (iftor)</b></td> <td>',"$sayt");
$sho2 = explode('</td>',"$sho[1]");
$shom = str_replace("$sho[1]"," ","$sho2[0]");
//xufton
$xuf= explode('<td><b>Xufton</b></td> <td>',"$sayt");
$xuf2 = explode('</td>',"$xuf[1]");
$xufton = str_replace("$xuf[1]"," ","$xuf2[0]");
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";


bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/18",
'caption'=>"Namoz vaqtlari
=========================
📌 《 🏙 Toshkent 》 vaqti bilan
--------------------------------------------
🌓  Tong:          -  $bobdod
🌞  Quyosh:     -  $quyosh

🕰  Bomdod:   -  $bobdod 
🕰  Peshin:      -  $pеshin 
🕰  Asr:            -  $asr 
🕰  Shom:        -  $shom 
🕰  Xufton:       -  $xufton
--------------------------------------------

📅 $Y yil $d $oy, $hafta",
'parse_mode'=>'html',
]);
}


if($text == "⛅Ob-havo🌧"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/228",
'caption'=>"Marhamat o‘zingizga kerakli Shaharni tanlang..!",
'parse_mode'=>'html',
'reply_markup'=>$havo,
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Toshkent"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/tashkent", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Toshkent


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Farg'ona"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/ferghana", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Farg'ona


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Xiva"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/khiva", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Xiva


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Andijon"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/andijan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Andijon


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Namangan"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/namangan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Namangan


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Buxoro"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/bukhara", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Buxoro


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Guliston"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/gulistan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Guliston


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Jizzax"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/jizzakh", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Jizzax


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Zarafshon"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/zarafshan", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Zarafshon


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Qarshi"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/karshi", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Qarshi


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Navoiy"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/navoi", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Navoiy


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}

$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Nukus"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/nukus", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Nukus


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Samarqand"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/samarkand", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Samarqand


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Termiz"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/termez", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Termiz


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);
if($text=="⛅ Urganch"){
$soat =date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$uz = file_get_contents("https://obhavo.uz/urgench", false, stream_context_create($arrContextOptions));
$ex1=explode("\n",$uz);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);
$kungr=str_replace('</p>',' ',$kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);
$oqgr=str_replace('</p>',' ',$oqgr);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);
$tongr=str_replace('</p>',' ',$tongr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);
$bugun=str_replace('</div>',' ',$bugun);
$bugun = trim($bugun);
$vil=str_replace('<h2>',' ',$ex1[60]);
$vil=str_replace('</h2>',' ',$vil);
$vil = trim($vil);
$tongr = trim($tongr);
$oqgr = trim($oqgr);
$kungr = trim($kungr); 
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]);
$havo1=str_replace('</div>',' ',$havo1);
$havo1 = trim($havo1);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);
$gr1=str_replace('</strong></span>',' ',$gr1);
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);
$gr2=str_replace('</span>',' ',$gr2);
$gr2= trim($gr2);
$nam=str_replace('<p>',' ',$ex1[75]);
$nam=str_replace('</p>',' ',$nam);
$nam= trim($nam);
$bosim=str_replace('<p>',' ',$ex1[77]);
$bosim=str_replace('</p>',' ',$bosim);
$bosim= trim($bosim);
$shamol=str_replace('<p>',' ',$ex1[76]);
$shamol=str_replace('</p>',' ',$shamol);
$shamol=str_replace('&#039;','',$shamol);
$shamol= trim($shamol);
$oy=str_replace('<p>',' ',$ex1[80]);
$oy=str_replace('</p>',' ',$oy);
$oy=str_replace('&#039;','',$oy);
$oy= trim($oy);
$qch=str_replace('<p>',' ',$ex1[81]);
$qch=str_replace('</p>',' ',$qch);
$qch= trim($qch);
$qb=str_replace('<p>',' ',$ex1[82]);
$qb=str_replace('</p>',' ',$qb);
$qb= trim($qb);
$yil = date("Y",strtotime("5 hour"));
$Y = str_replace(["2021","2021","2022"],["2021","2021","2022"], $yil);
$kun = date("d",strtotime("2 hour"));
$d = str_replace(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"],["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31"], $kun);
$okun=date("n");
$oynoms = "1Yᴀɴᴠᴀʀ1 2Fᴇᴠʀᴀʟ2 3Mᴀʀᴛ3 4Aᴘʀᴇʟ4 5Mᴀʏ5 6Iʏᴜɴ6 7Iʏᴜʟ7 8Aᴠɢᴜsᴛ8 9Sᴇɴᴛᴀʙʀ9 11Oᴋᴛᴀʙʀ10 11Nᴏʏᴀʙʀ11 12Dᴇᴋᴀʙʀ12";
$ex2 = explode("$okun",$oynoms);
$oy1 = "$ex2[1]";
$haf = date('N',strtotime('2 hour'));
$haft="1Dᴜsʜᴀɴʙᴀ1 2Sᴇsʜᴀɴʙᴀ2 3Cʜᴏʀsʜᴀɴʙᴀ3 4Pᴀʏsʜᴀɴʙᴀ4 5Jᴜᴍᴀ5 6Sʜᴀɴʙᴀ6 7Yᴀᴋsʜᴀɴʙᴀ7";
$ex=explode("$haf",$haft);
$hafta="$ex[1]";
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"📆 Bugun: $d- $oy1 $Y yil,
🗓Hafta kuni: $hafta, 
⏳Hozir soat: $soat
**************************
🕌⛅ Urganch


🌤 Ob-havo: $rasm $havo1
🔆 $gr1 ... $gr2

🌅 Tong: $tongr
🌄 Kun: $kungr
🌇 Oqshom: $oqgr

💧 $nam
🌙 $oy
💨 $shamol
🌅$qch
🌄$qb",
'parse_mode'=>'html',
]);
}
if($text == "🦠Covid-19"){
$covid=file_get_contents("https://m.aniq.uz/uz/statistika/coronavirus");
$ex=explode("\n",$covid);

$kasal=str_replace("<td>","",$ex[2083]);
$kasal=str_replace("</td>","",$kasal);
$kasal = trim($kasal);

$bkasal=str_replace("<td>","",$ex[2086]);
$bkasal=str_replace("</td>","",$bkasal);
$bkasal = trim($bkasal);

$vafot=str_replace("<td>","",$ex[2089]);
$vafot=str_replace("</td>","",$vafot);
$vafot = trim($vafot);

$tuzal=str_replace("<td>","",$ex[2095]);
$tuzal=str_replace("</td>","",$tuzal);
$tuzal= trim($tuzal);

$test=str_replace("<td>","",$ex[2098]);
$test=str_replace("</td>","",$test);
$test = trim($test);
$kun=date("d.m.Y",strtotime("2 hour"));
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Covid-19 haqida
📰Tezkor ma'lumotlar 
🔁$kun y. holatiga
➖➖➖➖➖➖➖➖➖➖➖
🌐O‘zbekiston bo‘yicha
➖➖➖➖➖➖➖➖➖➖➖
🤮·Kasallar: $kasal 
---------------------------------------------
🤧Bugungi Kasallar: $bkasal 
---------------------------------------------
😷Tuzalganlar: $tuzal
 ---------------------------------------------
⚰Vafot etgan: $vafot 
---------------------------------------------
🤒Testdan o'tganlar: $test
---------------------------------------------",
'parse_mode'=>'html',
]);
}



if($text == "🕋Allohning go‘zal ismlari🤲"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/229",
'caption'=>"Siz 《Allohning Go‘zal Ismlari》 bo‘limidasiz.
O‘zingizga kerakli bo‘limni tanlang...!",
'parse_mode'=>'html',
'reply_markup'=>$ismlaruz,
]);
}

if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________________________
1 }  الله--Alloh 
Tasnif: Xudoning ismi. Barcha suralarning (bittasidan tashqari) boshlanishida qoʻllaniladi
_____________________________
2}  Ar-Rohmān--الرحمن

Tasnif: Mehribon — Ulugʻ neʼmatlarni beruvchi.Bu sifatfaqat Allohga xos boʻlib, barchaga kofirga ham, moʻminga ham mehribon va neʼmat beruvchi maʼnosini anglatadi.Rahmon sifatini Alloh taolodan boshqa hech kimga nisbatan ishlatib boʻlmaydi.
_____________________________
3}  Ar-Rohīm--الرحيم

Tasnif: Rahmli — „Rohiym“ latif neʼmatlarni beruvchi.Bu sifat xosroq boʻlib, qiyomat kuni faqat moʻminlarga rahm qiluvchi maʼnosini anglatadi.Va Allohdan oʻzgalarga, jumladan Paygʻambar alayhissalomga nisbatan ham ishlatiladi.
_____________________________
4}   Al-Malik--الملك

Tasnif: Podsho — Barcha narsani egasi. Malik haqiqiy egadir.Undan oʻzga ega yoqdir.Shuning uchun bandalar faqat unga qul boʻladilar.Hech vaqtda bir qulga ikki xoʻjayin boʻlmaydi.Shuning uchun insonlar oʻzlariga oʻxshaganinsonlarga emas, balki yagona yaratganga, haqiqiy Malikka qul boʻlish lozim.
_____________________________
5}   Al-Quddūs--القدوس

Tasnif: Muqaddas, nuqsonlardan holi — Barcha ayblardan xoli, noloyiq sifatlardan munazzah, mutlaq muqaddaslik va mutlaq poklik Allohning oʻzigagina hosdir.
_____________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________________
6}  As-Salām--السلام

Tasnif: Ofat va balolardan solomat. Qutqarayotgan — „Salom“-barcha nuqsonlardan salomat. Shuningdek, tinchlik, xotirjamlik va rohat beruvchi degani. Alloh „Salom“ sifati ila bandalarga tinchlik, omonlik, xotirjamlik ato qiladi
_________________________
7}   Al-Mu’min--المؤمن

Tasnif: Moʻmin-iymon va omonlik beruvchi.
_________________________
8}   Al-Muhaymin--المهيمن

Tasnif: Hamma narsani qamrab oluvchi.Alloh bandalarning barcha holatlariga guvoh boʻlib turadi.Undan hech narsa maxfiy qolmaydi.
_________________________
9}   Al-Aziz--العزيز

Tasnif: Izzat va qudrat sohibi. Ulugʻ — Barchaning ustidan gʻolib. Undan biror narsa gʻolib kelolmaydi.
_________________________
10}   Al-Jabbār--الجبار

Tasnif: Bandalarini ishlarini isloh etuvchi. Jabbor — oliy qadar ulugʻ, Uning oldida hamma oʻzini xor tutadi.
_________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________________
11}   Al-Mutakabbir--المتكبر

Tasnif: Kattalik yarashuvchi zot. Mutakabbir — kibriyosi va ulugʻligi behad. Uning oldida boshqalar qul boʻlib turadi.
_____________________
12}   Al-Holiq--الخالق

Tasnif: Yaratuvchi, vujudga keltiruvchi. Xoliq — Asli va oʻxshashi yoq narsaning oʻlchovini mos qilib yaratuvchi. Xoliq mutloq vujudga keltiruvchidir.
_____________________
13}   Al-Bāri'--البارئ

Tasnif: Bori' — Yoʻqdan paydo qiluvchi, vujudga keltiruvchi, yaratuvchi. Bori’ning vujudga keltirishida tafovut yoqdir.
_____________________
14}    Al-Musovvir--المصور

Tasnif: Maxluqot va mavjudotlarga suvrat va shakl beruvchi.
_____________________
15}    Al-Gʻoffār--آل الغفار

Tasnif: Gʻaffor — Koʻplab magʻfirat qilib, bandalarning aybini oʻz fazli ila kechib yuboruvchi. bandalarning aybu nuqsonlari va gunohu maʼsiyatlarini fosh qilmay yopib turuvchi.
_____________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________
16}   Al-Qohhār--القهار

Tasnif: Qahhor — Barcha maxluqotlarni qabzasida tutib, ularni oʻz hukmiga yuritib va qudrati ila boʻysundirib turuvchi.
_________________
17}    Al-Vahhāb--الوهاب

Tasnif: Oʻz neʼmatlarini tekin ato etuvchi.
_________________
18}   Ar-Rozzāq--الرزاق

Tasnif: Barcha tirik mavjudot rizqini yetkazib beruvchi.
_________________
19}    Al-Fattāh--الفتاح

Tasnif: Hukm etuvchi, rahmat hazinalarini ochuvchi.
_________________
20}    Al-'Alīm--العليم

Tasnif: Biluvchi, dono, ilm sohibi. Boʻlgan va boʻladigan, avvalgi va oxirgi, zohir va botin narsalarning barchasini biluvchi.
_________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________
21}   Al-Qobiz--القابض

Tasnif: Kimlarningdir rizqini qiyuvchi, ruhlarni qabz etuvchi (oluvchi).
_____________
22}   Al-Bāsit--الباسط

Tasnif: Kimlargadir keng rizq beruvchi, ruh baxsh etuvchi.
_____________
23}   Al-Hofiz--الخافض

Tasnif: Kofirlar martabasini tushiruvchi.
_____________
24}   Ar-Rāfi'--الرافع

Tasnif: Moʻminlar martabasini koʻtaruvchi.
_____________
25}   Al-Mu’izz--المعز

Tasnif: Kimlarnidir aziz, qadrli etuvchi.
_____________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________________
26}   Al-Muzill--المذل

Tasnif: Kimlarnidur xoru zalil qiluvchi.
_________________________
27}   As-Samī--السميع

Tasnif: Maxfiy va oshkora gap va sharpalarni, xatto dildan oʻtganini ham, eshituvchi.
_________________________
28}    Al-Basīr--البصير

Tasnif: Hamma maxfiy va oshkora narsalarni koʻruvchi.
_________________________
29}    Al-Hakam--الحكم

Tasnif: Qatʼiy hukm etuvchi
_________________________
30}   Al-`Adl--العدل

Tasnif: Oʻta adolatli.
_________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________________
31}   Al-Latīf--اللطيف

Tasnif: Bandalariga sezdirmay oʻz lutfu ehsonini yetkasizb beruvchi.
_____________________
32}    Al-Hobīr--الخبير

Tasnif: Hamma maxfiy va oshkora ishlardan xabardor
_____________________
33}    Al-Halīm--الحليم

Tasnif: Jazolashga shoshmaydigan, hilm bilan yaxshilik qilib turuvchi.
_____________________
34}    Al-'Azīm--العظيم

Tasnif: Azamatli va ulugʻ zot. Aql tasavvur qila olmaydigan darajada azamatli va ulugʻ.
_____________________
35}    Al-Gʻofūr--الغفور

Tasnif: Koʻp magʻfirat qiluvchi.
_____________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________________
36}   Al-'Aliyy--العلي

Tasnif: Martabasi oliylikda benihoya.
_________________________
37}   Ash-Shakūr--الشكور

Tasnif: Oʻz amaliga koʻp savob beruvchi.
_________________________
38}    Al-Kabīr--الكبير

Tasnif: Hammadan ulugʻ.
_________________________
39}    Al-Hafīz--الحفيظ

Tasnif: Har bir narsani komil muhofaza qiluvchi
_________________________
40}    Al-Muqīt--المقيت

Tasnif: Barcha moddiy va ruhiy rizqlarni yaratuvchi.
_________________________
41}    An-Hasīb--الحسيب

Tasnif: Hisob qiluvchi, kifoya qiluvchi.
_________________________
42}    Al-Jalīl--الجليل

Tasnif: Sifatlarida ulugʻlikka ega.
_________________________
43}    Al-Karīm--الكريم

Tasnif: Saxovatli va karami keng. Birov soʻramasa ham, hech bir evaz olmasdan, narsalarni ato qiluvchi. Qarama-qarshilikdan pok. Karamli ishlar va xislatlar sohibi.
_________________________
44}    Ar-Roqīb--الرقيب

Tasnif: Doimo kuzatib turuvchi. Raqiyb — hech bir zararni ham qoʻymay tekshirib turuvchi.
_________________________
45}   Al-Mujīb--المجيب

Tasnif: Duolarni ijobat qiluvchi.
_________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________________
46}   Al-Vāsi'--الواسع

Tasnif: Keng va keng qamrovli zotdir
_________________________
47}   Al-Hakīm--الحكيم

Tasnif: Dono
_________________________
48}   Al-Vadūd--الودود

Tasnif: Bandalarini sevuvchi
_________________________
49}    Al-Majīd--المجيد

Tasnif: Eng ulugʻvor
_________________________
50}   Al-Bā'is--الباعث

Tasnif: Oʻliklarning tiriltiruvchisi
_________________________
51}   Ash-Shahīd--الشهيد

Tasnif: Har bir narsaga hoziru nozir. Barchaga shohidlik beruvchi.
_________________________
52}    Al-Haqq--الحق

Tasnif: Oʻzgarmas sobit zot. Haqni yuzaga chiqaruvchi zot.
_________________________
53}   Al-Vakīl--الوكيل

Tasnif: Barchaning ishi unga topshirilgan zot.
_________________________
54}    Al-Qovviyy--القوى

Tasnif: Quvvatli zot.
_________________________
55}    Al-Matīn--المتين

Tasnif: Matonatli zot.
_________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________________
56}   Al-Valiyy--الولى

Tasnif: Himoya qiluvchi doʻst, homiy va yordamchi
_________________________
57}   Al-Muhsi--المحصى

Tasnif: Barcha narsaning hisobini olgan zot
_________________________
58}   Al-Hamīd--الحميد

Tasnif: Barcha maqtovlar ila maqtalgan zot.
_________________________
59}    Al-Mubdi'--المبدئ

Tasnif: Barcha narsalarni avval boshdan bor qilgan zot.
_________________________
60}    Al-Mu'īd--المعيد

Tasnif: Yoʻq boʻlgan narsalarni yana qaytadan bor qiluvchi.
_________________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________________
61}   Al-Muhyi--المحيى

Tasnif: Tiriltiruvchi. U zot oʻliklarni tiriltiruvchidir va bu ismga ularni tiriltirishdan oldin sazovordir. Uni ularni oʻlik boʻlganlaridan keyin jon kiritib tirik qilganidan keyin tiriltiruvchi, deb atalganidek, ularni xalq qilishdan oldin, ularga hayot berishidan oldin ham, tiriltiruvchi, deyilaveradi. Xuddi, xaloyiqni xalq qilishidan oldin Xoliq boʻlganidek.
_____________________
62}    Mālik-ul-Mulk--مالك الملك

Tasnif: Mulk egasi. Bu dunyodagi ishlarni oʻzi xohlaganicha qiladi. Uning qazosini qaytaradigan va hukmini oʻzgartiradigan yoʻq.
_____________________
63}   Zūl-Jalāli val’ikrom--ذو الجلال والإكرام

Tasnif: Sharaf va kamol egasi. Karam va ikrom egasi.
_____________________
64}   Al-Muqsiţ--المقسط

Tasnif: Oʻz adolati ila mazlumlarga nusrat va zolimlarga jazo beruvchi.
_____________________
65}   Al-Jāmi--الجامع

Tasnif: Jamlovchi. Barcha haqiqatlarni jamlovchi. Odamlarni qiyomat kuni jamlovchi.
_____________________
66}    Al-Gʻoni--الغني

Tasnif: Behojat. Uning hech kim va hech narsaga hojati tushmaydi.
_____________________
67}    Al-Mugʻni--المغني

Tasnif: Behojat qiluvchi. U zot Oʻz bandalaridan qay birini xohlasa behojat qilib qoʻyadi.
_____________________
68}    Al-Māni'--المانع

Tasnif: Man qiluvchi.
_____________________
69}     Az-Zorr--الضار

Tasnif: Zarar qiluvchi. Zararli narsalarni ham yaratuvchi.
_____________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_________________
70}   An-Nāfi--النافع

Tasnif: Manfaat beruvchi.
_________________
71}    An-Nūr--النور

Tasnif: Oʻz-oʻzi ila zohir boʻlgan va oʻzgalarni zohir qilgan.
_________________
72}    Al-Hādi--الهادي

Tasnif: Hidoyat qiluvchi. U zot Oʻz fazli ila xohlagan kimsani hidoyat qiladi. Yaʼni, Alloh kimni toʻgʻri yoʻlga hidoyat qilsa, albatta, Oʻz xohishi va fazli ila hidoyat qiladi.
_________________
73}    Al-Badī--البديع

Tasnif: Oʻxshashi yoʻq narsalarni keltiruvchi.
_________________
74}   Al-Bāqi--الباقي

Tasnif: Boqiy qoluvchi. U doimiy bordir, unga foniylik oriz boʻlmas.
_________________
75}   Al-Vāris--الوارث

Tasnif: Muvjudotlar yoʻq boʻlganda ham boqiy qoluvchi zot.
_________________
76}   Ar-Roshīd--الرشيد

Tasnif: Toʻgʻri yoʻlga irshod qiluvchi.
_________________
77}    As-Sobur--الصبور

Tasnif: Oʻta sabrli. Osiylarni azoblashga shoshilmaydi.
_________________
78}    Al-Mumīt--المميت

Tasnif: Oʻldirivchi. Barcha jonzotlarning jonini oluvchi.
_________________
79}    Al-Hayy--الحي

Tasnif: Tirik. U tirikdir, oʻlmas. Yaʼni, Allohning hayoti abadiydir, oʻlim ila yoʻq boʻlmas. Shuningdek, Allohning hayoti azaliydir, oldindan yoʻq boʻlgan emas.
_________________
80}    Al-Qoyyūm--القيوم

Tasnif: Oʻz oʻzidan qoim boʻlgan va boshqalarni qoim qilgan zot.
_________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"_____________________
81}    Al-Vājid--الواجد

Tasnif: Topuvchi. Xohlagan narsasini topuvchi. Bu ishda birov Uni toʻsa olmaydi.
_____________________
82}   Al-Mājid--الماجد

Tasnif: Majdu sharaf sohibi boʻlgan zot.
_____________________
83}   Al-Vāhid--الواحد

Tasnif: Yagona. Bita. Boʻlinmas. U zot oʻz zotida ham, sifatlarida ham va ishlarida ham birdir.
_____________________
84}    As-Somad--الصمد

Tasnif: Somad sifati koʻp maʼnolarni oʻz ichiga oladi:- itoat qilingan ulugʻ-Usiz hech bir ish bitmaydi.- hech kimga hojati tushmaydi, barchaning hojati Unga tushadi.- butun maxluqot bitib tugasa ham, Oʻzi doim boqiydir va hokazo.
_____________________
85}   Al-Qodir--القادر

Tasnif: Cheksiz qudrat sohibi. U zot har bir narsaga qodirdir. har bir ish unga osondir
_____________________
86}    Al-Muqtadir--المقتدر

Tasnif: Juda ham qudratli
_____________________
87}    Al-Muqoddim--المقدم

Tasnif: Oldinga suruvchi. U zot xohlagan shaxs va narsani xohlaganidan oldinga suradi.
_____________________
88}    Al-Mu’ahhir--المؤخر

Tasnif: Orqaga suruvchi. U zot xohlagan shaxs va narsani xohlaganidan orqaga suradi.
_____________________
89}   Al-'Avval--الأول

Tasnif: „Avval“ — U hamma narsadan avval, yaʼni, barcha mavjudotlar yoʻqligida Alloh bor edi. Mavjudotlarni „Avval“ sifatiga ega boʻlgan Alloh yaratdi. Yaʼni, Alloh vujudga kelishining boshlanishi yoʻqdir
_____________________
90}   Al-'Ahir--الأخر

Tasnif: „Oxir“ — U hamma narsa yoʻq boʻlib ketganda ham Oʻzi qoladi.
_____________________
91}   Az-Zohir--الظاهر

Tasnif: „Zohir“ — Uning mavjudligi oshkor, ochiq-oydindir. U hamma narsadan zohir-ustundir.
_____________________
92}   Al-Bātin--الباطن

Tasnif: Botin — U koʻzga koʻrinmaydi. Hammadan pinhon-maxfiy narsalarni bilib turuvchidir.
_____________________
93}   Al-Vāli--الوالي

Tasnif: Har bir narsaga voliy — ega boʻlgan zot.
_____________________
94}     Al-Mutā'ali--المتعالي

Tasnif: Nuqsonlardan yuqori turuvchi zot.
_____________________
95}    Al-Barr--البر

Tasnif: Ulugʻ yaxshilik qiluvchi.
_____________________
96}    At-Tavvāb--التواب

Tasnif: Bandalarni tavbaga yoʻllovchi va ularning tavbasini koʻplab qabul qiluvchi zot.
_____________________
97}    Al-Muntaqim--المنتقم

Tasnif: Zolim va osiylardan intiqom oluvchi.
_____________________
98}    Al-Afuvv--العفو

Tasnif: Afv qiluvchi.
_____________________
99}     Ar-Roʻūf--الرؤوف

Tasnif: Oʻta shafqatli va mehribon.
_____________________",
'parse_mode'=>'html',
]);
}
if($text == "✍️ Matn 📜"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"Bizning @Namoz_Organish_Kanali Mizga Obuna Bo'lishni Unutmang !
Barcha Yaqinlaringizni Bizning Botga Tashrif Buyurtiring !
Admin ! 👨‍✈️@FirdavsbeK_CreatoR👨‍✈️",
'parse_mode'=>'html',
]);
}

if($text == "🎵 Audio 🎧"){
bot('sendAudio', [
'chat_id'=>$cid,
'audio'=>"https://t.me/Namoz_Organish_Kanali/230",
'parse_mode'=>'html',
]);
}

if($text == "🎞️ Video 🎬"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/231",
'caption'=>"🕋 Allohning 99 go‘zal ismlari.🕌

Bizning Kanal 👇👇👇
@Namoz_Organish_Kanali",
'parse_mode'=>'html',
'reply_markup'=>$ismlaruz,
]);
}

if($text == "😢 Qiyomat Kuni 📜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/235",
'caption'=>"QIYOMAT KUNI NIMALAR BO'LADI😲😢1 ABDULLOH DOMLA

https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "😢 Qiyomat Kuni 📜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/236",
'caption'=>"Abdulloh domla QIYOMAT KUNI SURNING CHALINISHI HAQIDA MARUZALARI.

https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🌏 Inson Yaratilishi 🌎"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/237",
'caption'=>"МАНА ХАҚИҚИ МУЖИЗА ОДАМ АТОНИ БЎЙЛАРИ.

https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋Saodat asri qissalari kitob🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/238",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋Saodat asri qissalari kitob🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/243",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋Saodat asri qissalari kitob🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/244",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋Saodat asri qissalari kitob🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/245",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋Saodat asri qissalari kitob🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/246",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🤲Ming bir xadis kitob🤲"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/247",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🧕Muslima Kundaligi🧕"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/248",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "🕋☪Qurʼon kitobi☪🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/249",
'caption'=>"Qur'on Kitobi 🌙:  APK
Hajmi:  🏆 5.3 MB
BOT: 🤖 👇
@Namoz_Organishbot
Admin: 👨‍✈️ 👇
@FiRdAvSbEk_CrEaToR",
'parse_mode'=>'html',
]);
}
if($text == "🕋☪Qurʼon kitobi☪🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/250",
'caption'=>"Qur'on Kitobi 🌙:  APK
Hajmi:  🏆 4.3 MB
BOT: 🤖 👇
@Namoz_Organishbot
Admin: 👨‍✈️ 👇
@FiRdAvSbEk_CrEaToR",
'parse_mode'=>'html',
]);
}
if($text == "🕋☪Qurʼon kitobi☪🕋"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/251",
'caption'=>"Qur'on Kitobi 🌙:  APK
Hajmi:  🏆 4.7 MB
BOT: 🤖 👇
@Namoz_Organishbot
Admin: 👨‍✈️ 👇
@FiRdAvSbEk_CrEaToR",
'parse_mode'=>'html',
]);
}

if($text == "👨‍💻Bizning BotLar🤖"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"(@FiRdAvSbEk_CrEaToR) Tomonidan Tayyorlangan 
Botlar Quyidagilar !",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"😘 𝙎𝙚𝙫𝙜𝙄 𝙏𝙚𝙨𝙏 𝙍𝙤𝘽𝙤𝙏 ❤️",'url'=>"t.me/Sevgi_Uzb_N1_Bot"]],
[['text'=>"🌙Namoz O'qishni O'rganish🤲",'url'=>"t.me/Namoz_Organishbot"]],
[['text'=>"Go PhP BoT 🤖",'url'=>"t.me/Go_PhP_UzB_BoT"]],
[['text'=>"👬 GrUpPaLaR UcHuN BoT 🤖",'url'=>"t.me/Grlar_adminbot"]],
[['text'=>"Rek N1 Kanal UzB BoT ✅",'url'=>"t.me/Reklama_UzbekBoT"]],
[['text'=>"♻ T̲̅e̲̅x̲̅T̲̅ C̲̅o̲̅m̲̅e̲̅n̲̅T̲̅ R̲̅o̲̅b̲̅o̲̅T̲̅ ♻",'url'=>"t.me/T_C_RoBoT"]],
[['text'=>"🤖 A'zO PluS RoBot 🤖",'url'=>"t.me/AzO_PluS_RoBoT"]],
[['text'=>"🤖𝗚𝗿𝗟𝗮𝗥 𝗥𝗼𝗕𝗼𝗧𝗶🤖",'url'=>"t.me/GrLaR_AvTo_RoBoT"]],
[['text'=>"🌠 I LoGo BoT",'url'=>"t.me/Hacker_Logo_Bot"]],
[['text'=>"🌠 LoGo FoTo BoT 🌠",'url'=>"t.me/LoGo_FoTo_BoT"]],
[['text'=>"🗯 M͜͡a͜͡j͜͡b͜͡u͜͡r͜͡i͜͡Y͜͡ A͜͡'z͜͡O͜͡ B͜͡o͜͡T͜͡ ⤴️",'url'=>"t.me/MajburiyAzo_Ro_BoT"]],
[['text'=>"❤️ 𝙈𝙪𝙨𝙪𝙡𝙢𝙤𝙣 𝙌𝙪𝙧𝙤𝙣 𝘽𝙤𝙩 🌙",'url'=>"t.me/MusulmoN_QuroN_BoT"]],
[['text'=>"📱 N͜͡a͜͡Z͜͡o͜͡R͜͡a͜͡T͜͡c͜͡h͜͡I͜͡ R͜͡o͜͡B͜͡o͜͡T͜͡ 🤖",'url'=>"t.me/NA_ZoRaT_CHI_BoT"]],
[['text'=>"🌠 Qonli Yozish Bot ☑️",'url'=>"t.me/QoNli_Yozish_01Bot"]],
[['text'=>"❄️ TesT RoBoT 🤖",'url'=>"t.me/TesT_UzB_RoBoT"]],
[['text'=>"♻ D͜͡o͜͡'S͜͡t͜͡L͜͡a͜͡R͜͡g͜͡A͜͡ U͜͡l͜͡A͜͡s͜͡H͜͡i͜͡S͜͡h͜͡ ♻",'url'=>"t.me/F_I_Z_O_BoT"]],
       ]
     ])
  ]);	
}
if($text == "👨‍✈️Bot AdminI👨‍✈️"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"🗨️🗨️🗨️🗨️🗨️🗨️🗨️🗨️🗨️🗨️🗨️
Admin: @Firdavsbek_Creator
🗯️🗯️🗯️🗯️🗯️🗯️🗯️🗯️🗯️🗯️🗯️
Hurmatli $name 
Admin Bilan Boglaning va Savol Takliflaringiz Bo'lsa Marhamat Pastdagi 👇 ADMIN Buyrugi Orqali Tashrif Buyuring ! ",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
[['text'=>"👨‍💻 ADMIN 👨‍✈️",'url'=>"t.me/FiRdAvSbEk_CrEaToR"]],
       ]
     ])
  ]);	
}
if($text == "👨‍Arab Alifbosi✍️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/262",
'caption'=>"《Arab Alifbosi》 Arab Tilini O'rganish!",
'parse_mode'=>'html',
'reply_markup'=>$aarabic,
]);
}
if($text == "1-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/263",
'caption'=>"1-дарс.  أ    ب    ت
Араб алифбосининг исмлари.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "1-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/264",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "2-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/265",
'caption'=>"2-дарс.  أ    ب    ت
Ҳарфлар махражи.

#Шайх_Алижон_қори


🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "2-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/266",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "3-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/Namoz_Organish_Kanali/267",
'caption'=>"3-дарс.   اَ    اِ     اُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "3-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Namoz_Organish_Kanali/268",
'caption'=>"https://t.me/joinchat/qi-xu53PsiFkMmMx",
'parse_mode'=>'html',
]);
}
if($text == "4-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/269",
'caption'=>"4-дарс. زَ     زِ     زُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "5-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/270",
'caption'=>"5-дарс.  مَ     مِ     مُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "6-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/271",
'caption'=>"6-дарс.  تَ     تِ     تُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "7-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/272",
'caption'=>"7-дарс. نَ     نِ     نُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "8-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/273",
'caption'=>"8-дарс.  يَ      يِ      يُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "9-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/274",
'caption'=>"9-дарс.  بَ    بِ    بُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "10-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/275",
'caption'=>"10-дарс. كَ      كِ      كُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "11-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/276",
'caption'=>"11-дарс. لَ      لِ      لُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "12-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/277",
'caption'=>"12-дарс. وَ      وِ      وُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @QuroN_SurasI_RoBoT ✅",
'parse_mode'=>'html',
]);
}
if($text == "13-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/278",
'caption'=>"13-дарс. هَ       هِ       هُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "14-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/280",
'caption'=>"14-дарс.  فَ   فِ     فُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "15-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/279",
'caption'=>"15-дарс. قَ    قِ      قُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "16-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/281",
'caption'=>"16-дарс. شَ    شِ     شُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "17-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/282",
'caption'=>"17-дарс.  سَ     سِ     سُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "18-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/283",
'caption'=>"18-дарс. ثَ     ثِ     ثُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "19-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/284",
'caption'=>"19-дарс. صَ    صِ    صُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "20-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/285",
'caption'=>"20-дарс.  طَ     طِ     طُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "21-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/286",
'caption'=>"21-дарс.  جَ      جِ      جُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "22-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/287",
'caption'=>"22-дарс.  خَ      خِ      خُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "23-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/288",
'caption'=>"23-дарс. حَ      حِ      حُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "24-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/289",
'caption'=>"24-дарс. غَ      غِ      غُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "25-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/290",
'caption'=>"25-дарс. عَ      عِ      عُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "26-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/291",
'caption'=>"26-дарс. دَ       دِ      دُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "27-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/292",
'caption'=>"27-дарс. ضَ     ضِ    ضُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "28-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/293",
'caption'=>"28-дарс. ذَ      ذِ      ذُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "29-D͜͡A͜͡R͜͡S͜͡ ✍️"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/294",
'caption'=>"29-дарс. ظَ      ظِ      ظُ
Ҳарфлар махражи.

#Шайх_Алижон_қори

🌙 @Namoz_OrganishBot ✅",
'parse_mode'=>'html',
]);
}
if($text == "🌁 Jannat Haqida 📜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/298",
'caption'=>"Жаннат Хакида

🌙 @Namoz_OrganishBot",
'parse_mode'=>'html',
]);
}
if($text == "🌁 Jannat Haqida 📜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/299",
'caption'=>"Abdulloh Domla - JANNAT HAQIDA🌁

🌙 @Namoz_OrganishBot",
'parse_mode'=>'html',
]);
}
if($text == "🌁 Jannat Haqida 📜"){
bot('Sendvideo',[
'chat_id'=>$cid,
'video'=>"https://t.me/Namoz_Organish_Kanali/300",
'caption'=>"Jannatga sayohat.

🌙 @Namoz_OrganishBot",
'parse_mode'=>'html',
]);
}


if($text == "🗳 Bot Kodi 🗳"){
bot('Senddocument',[
'chat_id'=>$cid,
'document'=>"https://t.me/Live_kanal/119",
'caption'=>"BOT KODI:  PHP
Hajmi:  🏆 322,7 KB
BOT: 🤖 👇
@Namoz_Organishbot
Admin: 👨‍✈️ 👇
@FiRdAvSbEk_CrEaToR",
'parse_mode'=>'html',
]);
}



?>