[hr]
[center][color=red][size=16pt][b]TABS IN POSTS v1.0[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] -> [url=https://custom.simplemachines.org/mods/index.php?mod=4182]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
Ever had too much information and wished you could put it in tabs to organize it?  Well, now you can with this mod using the [b]tabarea[/b] and [b]tab[/b] bbcodes like this:
[code=Example][tabarea]
[tab=Tab 1]This is a test![/tab]
[tab=Tab 2]This is a test as well![/tab]
[taburl=Tab 3]http://www.xptsp.com[/taburl]
[/tabarea][/code]
Note that anything between [b][nobbc][tabarea][/nobbc][/b] and [b][nobbc][tab][/nobbc][/b], between closing and opening [b][nobbc][tab][/nobbc][/b] tags, and between the last [b][nobbc][tab][/nobbc][/b] and the closing [b][nobbc][tabarea][/nobbc][/b] tag is discarded.  The example below:
[code=Excluded Example][tabarea]Excluded # 1
[tab=Tab 1]This is a test![/tab]Excluded # 2
[tab=Tab 2]This is a test as well![/tab]Excluded # 3
[taburl=Tab 3]http://www.xptsp.com[/taburl]
[/tabarea][/code]
is the same as the first code block shown.  You can also use the [b][nobbc][taburl][/nobbc][/b] bbcode to go to a different page/site by clicking that link.

Using the new [b][nobbc][wholepost[/nobbc][/b] bbcode changes the format of the post so that the poster information is omitted from the message display.

There is no restriction of tab areas per post or topic, as each tab area is independent of the others.

[color=blue][b][size=12pt][u]Admin Settings[/u][/size][/b][/color]
There are no admin settings for this mod.  To disable the bbcode, you may go to [b]Admin[/b] => [b]Forum[/b] => [b]Posts and Topics[/b] => [b]Bulletin Board Code[/b] and uncheck the [b]tagarea[/b] and/or [b]tag[/b] bbcodes.

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.15, but should work on SMF 2.0 and up.  SMF 1.x is not and will not be supported.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
The changelog has been removed and can be seen at [url=http://www.xptsp.com/board/index.php?topic=1647.msg2389#msg2389]XPtsp.com[/url].

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
[quote]Copyright (c) 2018, Douglas Orend
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
[/quote]