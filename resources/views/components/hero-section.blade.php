<script type="text/javascript">

    document.addEventListener('DOMContentLoaded', e => {
        let btn_1 = document.querySelector('.img-button-1');
        let btn_2 = document.querySelector('.img-button-2');
        let btn_3 = document.querySelector('.img-button-3');
        let img_1 = document.querySelector('#sukuna');
        let img_2 = document.querySelector('#satoru');
        let img_3 = document.querySelector('#idk');
        let bigImg = document.querySelector('.bigImg');
        let img = [
            'sukuna.png',
            'satoru.png',
            'idk.png'
        ];

        btn_1.addEventListener('click', e => {
            img_1.setAttribute('class', 'first-img');
            img_2.setAttribute('class','second-img');
            img_3.setAttribute('class', 'third-img');
            img_1.classList.add('bigImg');
            img_2.classList.remove('bigImg');
            img_3.classList.remove('bigImg');
            btn_1.classList.add('active');
            btn_2.classList.remove('active');
            btn_3.classList.remove('active');
        })

        btn_2.addEventListener('click', e => {
            img_1.setAttribute('class', 'third-img');
            img_2.setAttribute('class','first-img');
            img_3.setAttribute('class', 'second-img');
            img_2.classList.add('bigImg');
            img_3.classList.remove('bigImg');
            img_1.classList.remove('bigImg');
            btn_2.classList.add('active');
            btn_1.classList.remove('active');
            btn_3.classList.remove('active');
        })

        btn_3.addEventListener('click', e => {
            img_1.setAttribute('class', 'second-img');
            img_2.setAttribute('class','third-img');
            img_3.setAttribute('class', 'first-img');
            img_3.classList.add('bigImg');
            img_2.classList.remove('bigImg');
            img_1.classList.remove('bigImg');
            btn_3.classList.add('active');
            btn_2.classList.remove('active');
            btn_1.classList.remove('active');
        })
    })
</script>

<section class="flex flex-row max-lg:space-y-10 max-xl:flex-col">
    <div class="max-2xl:space-y-4 space-y-16 flex-1">
        <h1 class="text-3xl font-bold text-slate-800">Eclectic <span class="text-black">Euphoria</span>: Unveiling the Depths of Knowledge</h1>
        <p class="text-md font-sans leading-7 opacity-75">Welcome to our blog website! Here, we strive to provide you with engaging and informative content on a variety of topics, from lifestyle and travel to technology and business. Our team of experienced writers and researchers work tirelessly to bring you the latest news, insights, and trends, all in one convenient online hub. Whether you're looking for entertainment, education, or simply a way to stay up-to-date with the world around you, we've got you covered. So, sit back, relax, and explore our blog to your heart's content!</p>
        <button class="px-8 py-3 text-3xl rounded-xl text-yellow-400 bg-black focus:ring-4 focus:ring-slate-700 hover:shadow-xl hover:bg-yellow-500 hover:text-black transition-all duration-150">Blogs</button>
        <h2 class="text-1xl font-bold">
            Get ready to explore a vast array of topics that will captivate your imagination, ignite your curiosity, and spark meaningful conversations. Our blog is a treasure trove of thought-provoking articles, engaging stories, informative guides, and entertaining anecdotes.
        </h2>
        <p class="text-md font-sans leading-7 opacity-75">
            Whether you're seeking inspiration, seeking to expand your knowledge, or simply looking for a delightful reading experience, our blog has something for everyone. From personal development and wellness to travel adventures, technology trends, and the latest fashion tips – there's no limit to the captivating content you'll find here.Our team of passionate writers ensures each piece is crafted with expertise, backed by credible research, and curated to offer you the best possible reading experience. So, sit back, relax, and let our blog take you on a journey of discovery and inspiration. Welcome to a world of wonder, knowledge, and entertainment – welcome to our blog website!
        </p>
    </div>
    <div class="flex-1 space-y-10">
        <div class="h-[450px] relative justify-center items-center">
            <img src="sukuna.png" alt="sukuna" class="first-img bigImg" id="sukuna" />
            <img src="satoru.png" alt="satoru" class="second-img" id="satoru" />
            <img src="idk.png" alt="idk" class="third-img" id="idk" />
        </div>
        <div class="flex items-center justify-between">
            <button class="img-button-1 active">
                <img src="sukuna.png" alt=""/>
            </button>
            <button class="img-button-2">
                <img src="satoru.png" alt=""/>
            </button>
            <button class="img-button-3">
                <img src="idk.png" alt=""/>
            </button>
        </div>
    </div>
</section>
