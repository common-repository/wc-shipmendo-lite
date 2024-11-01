=== shipmendo - Lite ===
Contributors: grilabs
Tags: kargo takip, kargo, aras, mng, ptt, sürat, yurtiçi, ups, sipariş takibi, sipariş gönderimi, woocommerce
Requires at least: 5.6
Tested up to: 5.8
Requires PHP: 7.0
Stable tag: 5.5.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

**shipmendo - Lite** kullanarak siparişlerin kargo adımlarını müşterilerinizle paylaşın.
Desteklenen kargo firmaları:
- Aras Kargo,
- MNG Kargo,
- PTT Kargo,
- Sürat Kargo,
- UPS Kargo,
- Yurtiçi Kargo

== Description ==
[youtube https://www.youtube.com/watch?v=QaqxG9Zq1IA]
Bu eklenti, sattığı fiziksel ürünleri kargo ile gönderen WooCommerce mağazaları için tasarlanmıştır.
Siparişlerin gönderim bilgilerini müşterilerinizle paylaşmanızı sağlar.

Mağaza yetkilisi sipariş detaylarına gönderim firmasını ve kargo takip bilgisini kaydeder. Ardından aşağıdaki aksiyonlar gerçekleşir:
- Müşteri hesabında yer alan siparişler menüsünden siparişlere ait gönderim durumu görülebilir ve takip için bağlantı eklenir.
- Opsiyonel olarak kargo gönderimi yapıldığında SMS(requires ["WP SMS Functions"](https://wordpress.org/plugins/wp-sms-functions/) plugin.) gönderimi yapılır. Gönderilecek mesajın içeriğini siz belirleyebilirsiniz.
- Opsiyonel olarak kargo gönderimi yapıldığnda müşteriye e-posta gönderimi yapılır. Gönderilecek mesajın içeriğini siz belirleyebilirsiniz.

= Ayarlar =
Bu eklenti için aşağıdaki ayarları yapabilirsiniz:
- Gönderilen SMS mesajını ayarlayabilirsiniz. Mesaj içerisinde kullanabileceğiniz kısa-kodları ayarlar sayfasında görebilirsiniz.
- Gönderilecek e-posta mesajını ayarlayabilirsiniz. WooCommerce e-posta yapısına uygun çalışır. [Bkz](https://woocommerce.com/posts/how-to-customize-emails-in-woocommerce/)

= SMS Ayarları =
SMS gönderim işlemleri ["WP SMS Functions"](https://wordpress.org/plugins/wp-sms-functions/) eklentisi ile gerçekleştirilir. SMS gönderimini aktif etmek için ilk olarak bu eklentiyi Wordpress web sitenize yüklemelisiniz. SMS gönderim ayarları için "Ayarlar / SMS Gönderici" menüsünü ziyaret edin.

== Kurulum ==

Eklentinin kullanıma hazır hale getirilmesi için aşağıdaki aşamaları izleyebilirsiniz:

1. Eklenti dosyalarını `/wp-content/plugins/wc-shipmendo-lite` dizinine yükleyin veya Wordpress eklenti marketi üzerinden hızlıca edinin,
2. 'Eklentiler' sayfasından etkinleştirin,
3. Eklenti ayarları için "shipmendo - Lite" ekranlarını kullanabilirsiniz,
4. Varsayılan gönderim firmanızı seçin ve diğer zorunlu alanları doldurun,
5. Ayarları tamamladıktan sonra siparişlerinize kargo detaylarını girerek kullanıma başlayabilirsiniz.

== Frequently Asked Questions ==

= Yeni kargo firması nasıl eklerim? =
Yeni bir kargo firması eklenmesi şu an için çok basit değil. Bunu ilerleyen sürümlerde özelleştirmeler yapabilmeniz adına daha basit hale getireceğiz. Yine de devam etmek isterseniz aşağıdaki adımları takip edebilirsiniz.

1. "gl_shipmendo_get_cargo_companies" fonksiyonunu "inc/functions.php" dosyasında bulun.
2. "$companies" dizisinden bir elemanı kopyalayın.
3. Firma detaylarını(slug, name and tracking URL structure) klonlanan satırda düzenleyin ve kaydedin.

== Changelog ==

= 1.2 =
* E-posta'da yer alan kargo firması logosu yeniden düzenlendi.
* Wp-sms-functions eklentisi aktif değilken meydana gelen hatalar giderildi.
* Kargo takip numarası girildiği esnada sipariş durumunun otomatik olarak güncellenebilmesi için tercih eklendi.

= 1.1 =
* Readme dosyası Türkçe için tekrar düzenlendi.
* Bazı kargo firmalarında yaşanan takip URL problemi giderildi.
* E-posta gönderiminde görülen bazı hatalar giderildi.

= 1.0 =
* This is the launch version. No changes yet.