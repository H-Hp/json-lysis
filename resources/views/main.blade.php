<title>JSON Iysis - Jsonを見やすい図へ変換</title>
<meta name="description" content="JSONデータを直感的な図に変換する「JSON Iysis」は、複雑な構造を持つJSONを簡単に理解できるように可視化します。このツールは、リアルタイムでの編集とグラフの更新が可能です。エラーの検出、グラフの向きの変更、そしてグラフを画像としてエクスポートする機能も備えています。JSON Iysisは、Web開発やプレゼンテーションでの使用に最適なツールです。" />
<link rel="shortcut icon" href="/favicons/favicon.ico">

<!--


<link rel="stylesheet" href="{{ asset('/build/asset/app.css') }}" >
<script src="{{ asset('/build/asset/app.js') }}"></script>
-->


@vite(['resources/css/app.css', 'resources/js/app.js'])


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Googleアナリティクストラッキング tag (gtag.js) --><script async src="https://www.googletagmanager.com/gtag/js?id=G-N4Z9LH5GT2"></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-N4Z9LH5GT2');</script>

<div class="flex flex-col justify-between h-screen bg-gray-800 p-2 mx-auto max-w-full">
  <header class="flex items-center justify-center text-gray-200 text-2xl my-5">
    <div class="text-4xl ml-3 mr-3">JSON Iysis - Jsonを見やすい図へ変換</div>
  </header>
  <a class="fixed left-4 top-4 md:right-14 md:top-6 text-xl text-white" href="https://vercel.com/new/clone?repository-url=https%3A%2F%2Fgithub.com%2Fpinecone-io%2Fpinecone-vercel-starter&amp;env=OPENAI_API_KEY,PINECONE_API_KEY,PINECONE_CLOUD,PINECONE_REGION,PINECONE_INDEX&amp;envDescription=API%20Keys%20needed%20to%20run%20the%20application&amp;envLink=https%3A%2F%2Fdocs.pinecone.io%2Fdocs%2Fprojects%23api-keys&amp;project-name=my-awesome-pinecone-vercel-project&amp;repository-name=my-awesome-pinecone-vercel-project&amp;demo-title=Pinecone%20%2B%20Vercel%20AI%20SDK%20Starter&amp;demo-description=A%20Next.js%20starter%20chatbot%20using%20Vercel's%20AI%20SDK%20and%20implements%20the%20Retrieval-Augmented%20Generation%20(RAG)%20pattern%20with%20Pinecone&amp;demo-url=https%3A%2F%2Fpinecone-vercel-example.vercel.app%2F&amp;demo-image=https%3A%2F%2Fvercel.com%2F_next%2Fimage%3Furl%3Dhttps%253A%252F%252Fimages.ctfassets.net%252Fe5382hct74si%252F1G4xSqx0bCgVVv3aY3rrX4%252Ffa27791c39ddf058995561d794a68710%252FCleanShot_2023-07-21_at_11.55.49.png%26w%3D3840%26q%3D75%26dpl%3Ddpl_5bh93Tz7wfj1PdxgzMGwNCc1nAxA">
    <img src="https://vercel.com/button" alt="Deploy with Vercel">
  </a>
  <button class="fixed right-12 top-4 md:right-12 md:top-6 text-xl text-white github-button">
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
    <path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z">
    </path>
  </svg>
</button>
<button class="fixed right-4 top-4 md:right-6 md:top-6 text-xl text-white animate-pulse-once info-button">
  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
    <path d="M464 336a48 48 0 1 0 96 0 48 48 0 1 0-96 0zm72 112h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V456c0-4.4-3.6-8-8-8z">
    </path>
  </svg>
</button>
<div class="flex w-full flex-grow overflow-hidden relative">
  <div id="chat" class="flex flex-col w-full lg:w-3/5 mr-4 mx-5 lg:mx-0">
    <div id="json-zu" class="border-2 border-gray-600 p-6 rounded-lg overflow-y-scroll flex-grow flex flex-col justify-end bg-gray-700">
      <div>
      </div>
    </div>
    <form class="mt-5 mb-5 relative bg-gray-700 rounded-lg">
      <input type="text" class="input-glow appearance-none border rounded w-full py-2 px-3 text-gray-200 leading-tight focus:outline-none focus:shadow-outline pl-3 pr-10 bg-gray-600 border-gray-600 transition-shadow duration-200" value="">
      <span class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none text-gray-400">Press ⮐ to send</span>
    </form>
  </div>
  <div class="absolute transform translate-x-full transition-transform duration-500 ease-in-out right-0 w-2/3 h-full bg-gray-700 overflow-y-auto lg:static lg:translate-x-0 lg:w-2/5 lg:mx-2 rounded-lg">
    <div class="flex flex-col border-2 overflow-y-auto rounded-lg border-gray-500 w-full ">
      <div class="flex flex-col items-start sticky top-0 w-full">
        <div class="flex flex-col items-start lg:flex-row w-full lg:flex-wrap p-2">
          <div class="">
            <div class="pr-2 lg:flex-grow">
              <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-600 font-semibold text-zinc-100 hover:bg-zinc-400 active:bg-zinc-800 active:text-zinc-100/70 relative overflow-hidden w-full my-1 lg:my-2 mx-2 " style="background-color:bg-gray-800;color:text-gray-200">
                <a href="https://e360.yale.edu/digest/indonesia-malaysia-deforestation" target="_blank" rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 active:bg-brand-700 dark:bg-brand-400 dark:hover:bg-brand-300 dark:active:bg-brand-200 flex items-center justify-center rounded-full p-2 text-3xl text-white transition duration-200 hover:cursor-pointer dark:text-white">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" color="white" font-size="14" class="hover:text-green" style="color:white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z"></path>
                  </svg>
                </a>
                <div class="relative">Indonesia Deforestation</div>
              </button>
            </div>
          </div>
          <div class="">
            <div class="pr-2 lg:flex-grow">
              <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-600 font-semibold text-zinc-100 hover:bg-zinc-400 active:bg-zinc-800 active:text-zinc-100/70 relative overflow-hidden w-full my-1 lg:my-2 mx-2 " style="background-color:bg-gray-800;color:text-gray-200">
                <a href="https://cleantechnica.com/2023/06/29/solar-82-of-power-capacity-growth-in-india-in-2022/" target="_blank" rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 active:bg-brand-700 dark:bg-brand-400 dark:hover:bg-brand-300 dark:active:bg-brand-200 flex items-center justify-center rounded-full p-2 text-3xl text-white transition duration-200 hover:cursor-pointer dark:text-white">
                  <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" color="white" font-size="14" class="hover:text-green" style="color:white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z"></path>
            </svg>
          </a>
          <div class="relative">Solar Power in India</div>
        </button>
      </div>
    </div>
    <div class="">
      <div class="pr-2 lg:flex-grow">
        <button class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-600 font-semibold text-zinc-100 hover:bg-zinc-400 active:bg-zinc-800 active:text-zinc-100/70 relative overflow-hidden w-full my-1 lg:my-2 mx-2 " style="background-color:bg-gray-800;color:text-gray-200">
          <a href="https://www.cbssports.com/nba/news/matisse-thybulle-to-stay-with-blazers-who-match-mavericks-three-year-33-million-deal-per-report/" target="_blank" rel="noopener noreferrer" class="bg-blue-500 hover:bg-blue-600 active:bg-brand-700 dark:bg-brand-400 dark:hover:bg-brand-300 dark:active:bg-brand-200 flex items-center justify-center rounded-full p-2 text-3xl text-white transition duration-200 hover:cursor-pointer dark:text-white">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" color="white" font-size="14" class="hover:text-green" style="color:white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M574 665.4a8.03 8.03 0 0 0-11.3 0L446.5 781.6c-53.8 53.8-144.6 59.5-204 0-59.5-59.5-53.8-150.2 0-204l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3l-39.8-39.8a8.03 8.03 0 0 0-11.3 0L191.4 526.5c-84.6 84.6-84.6 221.5 0 306s221.5 84.6 306 0l116.2-116.2c3.1-3.1 3.1-8.2 0-11.3L574 665.4zm258.6-474c-84.6-84.6-221.5-84.6-306 0L410.3 307.6a8.03 8.03 0 0 0 0 11.3l39.7 39.7c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c53.8-53.8 144.6-59.5 204 0 59.5 59.5 53.8 150.2 0 204L665.3 562.6a8.03 8.03 0 0 0 0 11.3l39.8 39.8c3.1 3.1 8.2 3.1 11.3 0l116.2-116.2c84.5-84.6 84.5-221.5 0-306.1zM610.1 372.3a8.03 8.03 0 0 0-11.3 0L372.3 598.7a8.03 8.03 0 0 0 0 11.3l39.6 39.6c3.1 3.1 8.2 3.1 11.3 0l226.4-226.4c3.1-3.1 3.1-8.2 0-11.3l-39.5-39.6z"></path>
            </svg>
          </a>
          <div class="relative">Matisee Thybulle</div>
        </button>
      </div>
    </div>
  </div>
              
          <div class="flex-grow w-full px-4">
            <button id="change-btn"  class="inline-flex items-center gap-2 justify-center rounded-md py-2 px-3 text-sm outline-offset-2 transition active:transition-none bg-zinc-600 font-semibold text-zinc-100 hover:bg-zinc-400 active:bg-zinc-800 active:text-zinc-100/70 w-full my-2 uppercase active:scale-[98%] transition-transform duration-100" style="background-color:#4f6574;color:white">Clear Index</button>
          </div>
          <div class="flex p-2"></div>
          <div class="text-left w-full flex flex-col rounded-b-lg bg-gray-600 p-3 subpixel-antialiased">
            <label for="splittingMethod" class="text-white p-2 font-bold">Splitting Method:</label>
            <div class="relative w-full">
              <select id="splittingMethod" class="p-2 bg-gray-700 rounded text-white w-full appearance-none hover:cursor-pointer">
                <option value="recursive">Recursive Text Splitting</option>
                <option value="markdown" selected="">Markdown Splitting</option>
              </select>
            </div>
          </div>
        </div>
        <div class="flex flex-wrap w-full"></div>
<textarea name="" id="json-input-field" class="json-input-field">
{
  "key1" : "value1",
  "key2" : "value2",
  "key3" : "value3"
}
</textarea>
      </div>
    </div>
    <button type="button" class="absolute left-20 transform -translate-x-12 bg-gray-800 text-white rounded-l py-2 px-4 lg:hidden">☰</button>
  </div>
</div>