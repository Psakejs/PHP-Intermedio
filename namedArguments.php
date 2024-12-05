<?php 

/**
 * The function `what_emojis_you_like` takes four parameters - ``, ``, ``, and
 * ``, and then echoes a message stating the emojis liked, an easter egg message, and the name.
 * 
 * @param string emoji1 The `emoji1` parameter is the first emoji that you like.
 * @param string emoji2 The function `what_emojis_you_like` takes four parameters: ``, ``,
 * ``, and ``.
 * @param string easter_egg The `` parameter in the `what_emojis_you_like` function is a
 * placeholder for an additional emoji or message that can be included in the output. It's like a
 * hidden surprise or bonus content that can be displayed along with the two emojis and the name
 * provided.
 * @param string name The `name` parameter is a placeholder for the name of the person or entity that will be
 * included in the output of the `what_emojis_you_like` function.
 */
function what_emojis_you_like($emoji1,$emoji2,$easter_egg,$name){
    echo "I like $emoji1 and $emoji2. $easter_egg and my name is $name <br>";
}

// Named arguments:
what_emojis_you_like(
    emoji1: "🐶",
    emoji2: "🐱",
    name: "Daisy",
    easter_egg: "🐰",
);

what_emojis_you_like(
    emoji1: "🐰",
    emoji2:"🐳",
    name:"Pedro",
    easter_egg:"🦑",
);