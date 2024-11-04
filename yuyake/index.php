
    <?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Yuyake
 */
get_header();
?>
    
    <div class="ui-explorer">
      <button class="hamburger-btn" id="js-nav-trigger">
        <i></i>
      </button>
      <nav class="g-nav">
        <div class="g-nav__body">
          <div class="nav-visual c-outskirt__parent">
            <div class="c-outskirt">
              <span class="c-outskirt__line"></span>
              <span class="c-outskirt__line"></span>
              <span class="c-outskirt__line"></span>
              <span class="c-outskirt__line"></span>
            </div>
          </div>
          <div class="nav-grid">
            <ul class="nav-links --primary">
              <li>
                <a href="/" class="nav-link">
                  <span class="nav-link__alphabetic">TOP</span>
                  <small class="nav-link__kana">トップ</small>
                </a>
              </li>
              <li>
                <a href="#concept" class="nav-link">
                  <span class="nav-link__alphabetic">CONCEPT</span>
                  <small class="nav-link__kana">コンセプト</small>
                </a>
              </li>
              <li>
                <a href="#about" class="nav-link">
                  <span class="nav-link__alphabetic">SERVICE</span>
                  <small class="nav-link__kana">事業内容</small>
                </a>
              </li>
            </ul>
            <ul class="nav-links --secondary">
              <li>
                <a href="#sub-menu" class="nav-link">
                  <span class="nav-link__alphabetic">PRICE</span>
                  <small class="nav-link__kana">ポスティング地域単価</small>
                </a>
              </li>
              <li>
                <a href="#access" class="nav-link">
                  <span class="nav-link__alphabetic">COMPANY</span>
                  <small class="nav-link__kana">会社概要</small>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-link">
                  <span class="nav-link__alphabetic">CONTACT</span>
                  <small class="nav-link__kana">お問い合わせ</small>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <section class="mv">
      <div class="mv__copy-block">
        <header class="mv-copy" id="js-mv-copy">
          <div class="blended-title">
            <h1 class="blended-title__upper-txt">創造と戦略の融合。<br>あなたのビジョンを<br class="u-hide-pc">リアルな結果に<br class="u-hide-pc">変えます。</h1>
            <span class="blended-title__bottom-txt" aria-hidden="true">創造と戦略の融合。<br>あなたのビジョンを<br class="u-hide-pc">リアルな結果に<br class="u-hide-pc">変えます。</span>
          </div>
          <p class="mv-copy__translation">A fusion of creativity and strategy. <br class="u-hide-sp">Turn your vision into real results.</p>
        </header>
      </div>
      <div class="mv__slider-block">
        <div class="swiper-container is-fadeout">
          <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide-one">
              <div class="swiper-image" data-swiper-parallax-y="-10%">
                <div class="swiper-image-inner swiper-image-one" data-swiper-parallax-scale="1.2"></div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-two">
              <div class="swiper-image" data-swiper-parallax-y="-10%">
                <div class="swiper-image-inner swiper-image-two" data-swiper-parallax-scale="1.2"></div>
              </div>
            </div>
            <div class="swiper-slide swiper-slide-three">
              <div class="swiper-image" data-swiper-parallax-y="-10%">
                <div class="swiper-image-inner swiper-image-three" data-swiper-parallax-scale="1.2"></div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <main>

      <section class="concept" id="concept">
        <div class="concept-visual --1 js-jarallax">
          <span class="concept-visual__bg jarallax-bg"></span>
        </div>
        <div class="concept-vertival-catch">
          <p>Towards a new dimension of advertising. Partnerships that make your business shine. </p>
        </div>
        <div class="l-container">
          <div class="concept__body">
            <div class="concept-visual --2 js-jarallax">
              <span class="concept-visual__bg jarallax-bg"></span>
            </div>
            <h2 class="concept-title">広告の新しい次元へ。<br>ビジネスを輝かせる<br>パートナーシップ</h2>
            <p class="concept-paragraph">弊社は、広告の力を最大限に引き出し、<br class="u-hide-sp">
              クライアントのビジネスを新たな次元へと導くお手伝いをしています。<br>
              クリエイティブなアイデアと戦略的な洞察を組み合わせ、<br class="u-hide-sp">デジタル時代の複雑な広告環境においても成功を<br class="u-hide-sp">収めるためのパートナーシップを提供します。</p>
            <p class="concept-paragraph">私たちと共に、お客様のビジョンを現実にし、<br class="u-hide-sp">世界を輝かせましょう。</p>
          </div>
        </div>
      </section>

      <section class="about" id="about">
        <header class="l-heading-block --left-pos">
          <h2 class="c-heading js-heading-motion">
            <span class="c-heading__alphabetic has-right-line">
              Service
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1275 0.75">
                  <path class="js-heading-path" fill="none" d="M0 .5h1275" />
                </svg>
              </i>
            </span>
            <span class="c-heading__kana">事業内容</span>
          </h2>
        </header>
        <div class="l-container">
          <div class="about__body">
            <ul class="about-features">
              <li class="about-feature">
                <figure class="about-feature__fig c-outskirt__parent">
                  <img src="<?php  bloginfo('url'); ?>/wp-content/themes/yuyake/assets/images/about/feature_item_1_img.jpg" alt="広告業全般をサポート">
                  <div class="c-outskirt js-outskirt-hook">
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                  </div>
                </figure>
                <dl class="about-feature__data">
                  <dt>広告業全般をサポート</dt>
                  <dd>
                    <p>クリエイティブなアプローチと戦略的な洞察を組み合わせ、<br class="u-hide-sp">顧客のビジネスを成功に導くための包括的なサービスを提供しています。<br>戦略的ブランディングからクリエイティブデザイン、<br class="u-hide-sp">デジタルマーケティング、印刷物制作、イベントプロモーションまで、<br class="u-hide-sp">あらゆる広告ニーズに対応します。<br>私たちはクライアントとのパートナーシップを大切にし、<br class="u-hide-sp">常に最高の成果を追求します。<br>あなたのビジネスの成長を支援するために、<br class="u-hide-sp">ぜひ私たちの専門知識と経験を活用してください。</p>
                  </dd>
                </dl>
              </li>
              <li class="about-feature">
                <figure class="about-feature__fig c-outskirt__parent">
                  <img src="<?php  bloginfo('url'); ?>/wp-content/themes/yuyake/assets/images/about/feature_item_2_img.jpg" alt="ポスティング事業">
                  <div class="c-outskirt js-outskirt-hook">
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                  </div>
                </figure>
                <dl class="about-feature__data">
                  <dt>ポスティング事業</dt>
                  <dd>
                    <p>地域密着型のサービスを提供し、<br class="u-hide-sp">クライアントの広告や宣伝物を効果的に配布します。<br> 弊社のポスティングチームは、地域の地理や人口動態を理解し、<br class="u-hide-sp">最適な配布ルートを選択しています。<br>高品質な配布と確実な実行により、<br class="u-hide-sp">お客様のメッセージが適切な対象に届けられるよう<br class="u-hide-sp">ニーズを満たし、広告キャンペーンの成功を支援します。</p>
                  </dd>
                </dl>
              </li>
              <li class="about-feature">
                <figure class="about-feature__fig c-outskirt__parent">
                  <img src="<?php  bloginfo('url'); ?>/wp-content/themes/yuyake/assets/images/about/feature_item_3_img.jpg" alt="CM制作事業">
                  <div class="c-outskirt js-outskirt-hook">
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                    <span class="c-outskirt__line"></span>
                  </div>
                </figure>
                <dl class="about-feature__data">
                  <dt>CM制作事業</dt>
                  <dd>
                    <p>ブランドのストーリーを豊かに表現し、<br class="u-hide-sp">視聴者に感動や興味を与える魅力的なCM制作を行っています。<br>お客様のビジョンを理解し、<br class="u-hide-sp">目標に合った戦略的なアプローチを提供します。<br>クリエイティブなアイデアと高度な技術を組み合わせ、<br class="u-hide-sp">視覚的な魅力と情感的なインパクトを生み出します。<br>弊社の制作チームは、プロジェクトのすべての段階でお客様と協力し、<br class="u-hide-sp">最高品質の成果物を提供します。</p>
                  </dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="sub-menu" id="sub-menu">
        <header class="l-heading-block --right-pos">
          <h2 class="c-heading js-heading-motion">
            <span class="c-heading__alphabetic has-left-line">
              PRICE
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1275 0.75">
                  <path class="js-heading-path" fill="none" d="M0 .5h1275" />
                </svg>
              </i>
            </span>
            <span class="c-heading__kana">ポスティング地域単価</span>
          </h2>
        </header>
        <div class="l-container">
            <dl class="menu-data">
              <dt><span class="price">大阪府</span></dt>
              <dd>
                <span class="price">3.5円税抜〜</span>
              </dd>
              <dt><span class="price">兵庫</span></dt>
              <dd>
                <span class="price">4円税抜〜</span>
              </dd>
              <dt><span class="price">京都</span></dt>
              <dd>
                <span class="price">4.5円税抜〜</span>
              </dd>
              <dt><span class="price">奈良</span></dt>
              <dd>
                <span class="price">4.5円税抜〜</span>
              </dd>
              <dt><span class="price">滋賀</span></dt>
              <dd>
                <span class="price">相談</span>
              </dd>
              <dt><span class="price">和歌山</span></dt>
              <dd>
                <span class="price">相談</span>
              </dd>
            </dl>
        </div>
          <div class="sub-menu__annotation">
            <p>※地域によって変動があります。</p>
          </div>
      </section>

      <section class="access" id="access">
        <header class="l-heading-block --left-pos">
          <h2 class="c-heading js-heading-motion">
            <span class="c-heading__alphabetic has-right-line">
              Company
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1275 0.75">
                  <path class="js-heading-path" fill="none" d="M0 .5h1275" />
                </svg>
              </i>
            </span>
            <span class="c-heading__kana">会社概要</span>
          </h2>
        </header>

        <div class="l-container">
          <div class="access__body">
            <div class="access-data__wrapper">
              <dl class="access-data">
                <dt>会社名</dt>
                <dd>合同会社コレクトサポート</dd>
              </dl>
              <dl class="access-data">
                <dt>代表取締役</dt>
                <dd>成瀬　洋平</dd>
              </dl>
              <dl class="access-data">
                <dt>役員</dt>
                <dd>松本　龍</dd>
              </dl>
              <dl class="access-data">
                <dt>所在地</dt>
                <dd>〒559-0006<br>大阪府大阪市住之江区浜口西2-3-32-301
                  <p>
                    <a class="map-link" href="https://maps.app.goo.gl/TLto55s7tfm4fpgc6" target="_blank">Googlemapで見る</a>
                  </p>
                </dd>
              </dl>
              <dl class="access-data">
                <dt>電話番号</dt>
                <dd><a href="tel:08061035398" class="u-fake-link">080-6103-5398</a></dd>
              </dl>
              <dl class="access-data">
                <dt>営業時間</dt>
                <dd>平日　9:00〜19:00</dd>
              </dl>
              <dl class="access-data">
                <dt>設立</dt>
                <dd>2024年2月9日</dd>
              </dl>
              <dl class="access-data">
                <dt>資本金</dt>
                <dd>300,000円</dd>
              </dl>
              <dl class="access-data">
                <dt>事業内容</dt>
                <dd>ポスティング事業<br>
                  アニメーション制作業<br>
                  HP.LP作成<br>
                  観光ホームページ<br>
                  チャットGPT研修<br>
                  不用品回収事業</dd>
              </dl>
            </div>

            <figure>
              <div class="l-fluid-holder map-holder">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.723595256344!2d135.4849748!3d34.6111503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dd06e08c04d1%3A0xa35dc887ee45428c!2z44CSNTU5LTAwMDYg5aSn6Ziq5bqc5aSn6Ziq5biC5L2P5LmL5rGf5Yy65rWc5Y-j6KW_77yS5LiB55uu77yT4oiS77yT77yS!5e0!3m2!1sja!2sjp!4v1713497937770!5m2!1sja!2sjp" width="900" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </figure>
          </div>
        </div>
      </section>

      <section class="contact" id="contact">
        <div class="l-container">
          <header class="l-heading-block">
            <h2 class="c-heading">
              <span class="c-heading__alphabetic">Contact</span>
              <span class="c-heading__kana">お問い合わせ</span>
            </h2>
          </header>
          <div class="contact__body">
            <div>
              <p class="contact__lead">メールでのご相談、<br　class="u-hide-pc">お問い合わせは下記よりお願いいたします。<br>2、3営業日内に、担当者より返信させていただきます。<br class="u-hide-pc">尚、お急ぎの方はお電話にてお問い合わせください。</p>
            </div>
            <div id="form">
              <div class="form-thanks is-hidden" v-show="thanksMode">
                <div class="form-processing-status">
                  <figure class="form-processing-animation"
                    v-bind:class="processingStatus ? 'is-animated' : 'is-loading'">
                    <span class="spinner-icn">
                      <i class="form-check-mark">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 36">
                          <path
                            d="M38.9,35.492C27.683,41.721,16.333,59.44,16.333,59.44L6.091,47.812,0,53.626l14.81,18.41,5.4-.207C27.13,51.064,42.425,37.153,42.425,37.153Z"
                            transform="translate(0 -35.492)" fill="#000000" />
                        </svg>
                      </i>
                    </span>
                  </figure>
                  <h5 class="form-processing-status__msg" v-html="processingStatusMsg"></h5>
                  <p class="form-thanks__txt" v-show="processingStatus">
                    この度はお問い合わせいただき、誠にありがとうございます。<br>送信が完了いたしました。<br>内容確認後、担当者より通常1〜3営業日以内にご連絡いたします。</p>
                </div>
              </div>

              <div class="form-container" v-show="!thanksMode">
                <div class="form-comfirm" v-show="confirmMode">
                  <p class="is-hidden"><em>以下の内容で送信します。よろしいですか？</em></p>
                </div>
                <form v-on:submit.prevent="onSubmit()">
                  <div data-layout="bundle">

                    <div class="c-form-control">
                      <label for="name" class="c-form-control__label">{{ form.name.label }}<sup class="c-required-mark">必須</sup></label>
                      <div class="c-form-control__box">
                        <input type="text" id="name" class="c-form-control__input" name="name" v-model="form.name.value" required v-bind:readonly="confirmMode">
                      </div>
                    </div>
    
                    <div class="c-form-control">
                      <label for="email" class="c-form-control__label">{{ form.email.label }}<sup class="c-required-mark">必須</sup></label>
                      <div class="c-form-control__box">
                        <input type="email" id="email" class="c-form-control__input" name="email" v-model="form.email.value" required v-bind:readonly="confirmMode">
                      </div>
                    </div>
    
                    <div class="c-form-control">
                      <label for="tel" class="c-form-control__label">{{ form.tel.label }}</label>
                      <div class="c-form-control__box">
                        <input type="tel" id="tel" class="c-form-control__input" name="tel" size="17" pattern="(\d{1,5}-\d{1,4}-\d{4,5})|(\d{9,14})" title="半角数字のみ（ハイフン可能）" v-model="form.tel.value" v-bind:readonly="confirmMode">
                      </div>
                    </div>
    
                    <div class="c-form-control">
                      <label for="message" class="c-form-control__label">{{ form.message.label }}<sup class="c-required-mark">必須</sup></label>
                      <div class="c-form-control__box">
                        <textarea id="message" rows="5" class="c-form-control__textarea" name="message" v-model="form.message.value" required v-bind:readonly="confirmMode"></textarea>
                      </div>
                    </div>

                    <div class="c-form-control --special">
                      <div class="c-form-control__special-box">
                        <div class="is-hidden" v-show="confirmMode">
                          <input type="text" class="c-form-control__input" value="同意する" readonly>
                        </div>
                        <div v-show="!confirmMode">
                          <textarea rows="6" class="c-form-control__textarea privacy-textarea" readonly>
合同会社コレクトサポート（以下「当社」）では、以下のとおり個人情報保護方針を定め、ご利用者様の個人情報の適切な保護に努めます。

1．個人情報の定義

個人情報とは、以下の情報により特定の個人を識別できるもの、または個人識別符号が含まれるものをいいます。
  ・氏名、年齢、性別、住所、電話番号、職業、メールアドレス
  ・個人別に付与されたID、パスワード、その他の記号など
  ・その情報のみでは特定の個人を識別できないものの、他の情報と容易に照合することができ、これにより特定の個人を識別できることとなる情報

2．個人情報の収集、利用目的

当サイトの個人情報の収集・利用目的は、以下のとおりです。
  ・当サイトサービスの提供・運営のため
  ・お問い合わせに回答するため
  ・情報提供のため
  ・上記の利用目的に付随する目的

3．第三者への開示・提供

当サイトでは、個人情報の収集は、利用目的を出来る限り特定し、必要範囲でこれを行い、利用目的以外の利用及び提供を行いません。
但し、以下に該当する場合この限りではありません。
  ・お客様から同意をいただいた場合
  ・法令に基づき開示することが必要である場合
  ・不正アクセス、脅迫等の違法行為があった場合
  ・その他特別な理由のある場合

4．ご利用者様の個人情報の管理

当サイトは、ご利用者様の個人データへの不正なアクセスや漏洩、滅失、毀損等を防止するため、必要な安全対策を講じます。
また、保有を継続しない個人情報は、適切な方法で確実に廃棄または消去します。

5．プライバシーポリシーの変更および告知について

当サイトのプライバシーポリシーの内容は、必要に応じて変更することがありますが、その都度ご利用者様に個別のご連絡はいたしません。
ご利用の際には当ウェブサイトの最新の内容をご参照ください。

6．ご利用者様の個人データ照会

当サイトに保有されているご利用者様の個人データについて、ご利用者様ご自身が照会、修正、追加、利用停止、消去の各請求を要望される場合は、ご本人であることを確認の上、対応させていただきます。

7．免責

当サイトにリンクされている他のWEBサイトにおけるご利用者様の個人情報等の保護、取扱い等については、一切の責任を負うものではありません。

8．お問い合わせ先

当社の個人情報に関するお問い合わせ先は、下記までお願い致します。

【Webの場合】

お問合わせフォームよりお問合わせ下さい。

【郵送の場合】
所在地：〒559-0006 大阪府大阪市住之江区浜口西2-3-32-301
合同会社コレクトサポート
                          </textarea>
                          <div class="c-form-acceptance">
                            <input type="checkbox" id="acceptance" class="c-form-acceptance__checkbox" name="acceptance"
                              v-model="form.acceptance" required>
                            <label for="acceptance" class="c-form-acceptance__label">プライバシーポリシーに同意する</label>
                          </div>
                        </div>
                        <span>
                          <input type="text" id="js-honeypot" name="honeypot" class="form-honeypot"
                            data-note="ハニーポット（スパム対策）">
                        </span>
                      </div>
                    </div>

                    <div class="form-submit-area">
                      <div class="l-btn-wrapper --centered" v-show="!confirmMode">
                        <button id="js-submit" class="c-btn" type="submit" name="verify" value="verify">
                          <span class="c-btn__body">確認する</span>
                        </button>
                      </div>

                      <div class="l-btns-group" data-layout="2col" v-show="confirmMode">
                        <div class="l-btn-wrapper is-hidden">
                          <button class="c-btn --backward" type="button" @click="backToCorrect()">
                            <span class="c-btn__body">やり直し</span>
                          </button>
                        </div>
                        <div class="l-btn-wrapper is-hidden">
                          <button class="c-btn" type="submit" name="send" value="send" @click.once="sendForm()">
                            <span class="c-btn__body">送信する</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();