import { CssSyntaxError } from "postcss";
import { createApp } from "vue";
import { MagicString } from "vue/compiler-sfc";

import Main from "./main.vue";


createApp(Main).mount("#app");