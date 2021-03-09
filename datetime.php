<?php

  // CORS open-bar
  header("Access-Control-Allow-Origin: *");
  
  // return a datetime
  setlocale(LC_ALL, "fr_FR.UTF-8");
  date_default_timezone_set("Europe/Paris");
  $d = new DateTime(); // grab also the microseconds

  // oh and get an emoji, too
  $emojis = "😀 😃 😄 😁 😆 😅 😂 🤣 😊 😇 🙂 🙃 😉 😌 😍 🥰 😘 😗 😙 😚 😋 😛 😝 😜 🤪 🤨 🧐 🤓 😎 🤩 🥳 😏 😒 😞 😔 😟 😕 🙁 ☹️ 😣 😖 😫 😩 🥺 😢 😭 😤 😠 😡 🤬 🤯 😳 🥵 🥶 😱 😨 😰 😥 😓 🤗 🤔 🤭 🤫 🤥 😶 😐 😑 😬 🙄 😯 😦 😧 😮 😲 🥱 😴 🤤 😪 😵 🤐 🥴 🤢 🤮 🤧 😷 🤒 🤕 🤑 🤠 😈 👿 👹 👺 🤡 💩 👻 💀 👽 👾 🤖 🎃 😺 😸 😹 😻 😼 😽 🙀 😿 😾 🧠 🦷 🦴 👀 👁 👅 👄 💋 🧙‍♀️ 🧝‍♀️ 🧛‍♀️ 🧟‍♀️ 🧞‍♀️ 🧜‍♀️ 🧚‍♀️ 👼 🥼 🦺 🧦 👗 👘 🥻 💻 🖥 🖨 🖱 🖲 🕹 🗜 💽 💾";
  $emojis = explode(" ", $emojis); // to array
  $randEmoji = $emojis[array_rand($emojis)]; // randomly peak one

  // print
  header("Content-Type: text/plain");
  echo strftime("%A %d %B %Y, %H:%M:%S") . "." . $d->format("u") . " " . $randEmoji;

?>