<footer class="footer">
  <div class="container footer__social">
    <div class="row">
      @component('components.logo') @endcomponent
      @component('components.socialButtons', 
        [
          "buttons" => array(
            array(
              'title' => 'Instagram',
              'icon' => 'insta',
              'link' => 'https://instagram.com'
            ),
            array(
              'title' => 'VKontakte',
              'icon' => 'vk',
              'link' => 'https://vk.com'
            ),
            array(
              'title' => 'Facebook',
              'icon' => 'fb',
              'link' => 'https://facebook.com'
            ),
          ),
        ]
      )
      @endcomponent
    </div>
  </div>
</footer>