<?php

use Illuminate\Database\Seeder;
use App\Showplace;
class ShowplaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Showplace::create(
            [
                'name'=>'Дворец Пусловских',
                'desc' => 'Неоготический дворец отлично мог бы вписаться в ландшафт Великобритании – он выглядит совершенно нетипичным как для Беларуси того времени (дворец датируется началом XIX века), так и сегодняшней. Дворец построил Казимир Пусловский, а его внук Леон лихо проиграл наследство в карты. Здание жгли партизаны, а с 2008 года комплекс все собираются реконструировать – открыть ресторан и ЗАГС. Пока до этого, к счастью, не дошло.

В мощном здании 12 башен – каждая отвечает за один месяц года. 
«Летние» башни в центре – это самые «хлебные» месяцы – с мая по август.
 Каждый год два дня солнце полностью освещает одну комнату – во времена Пусловских в это время ней проводились «дни комнаты». 
 Включай воображение, потому что внутренние убранства дворца не сохранились: не увидишь Черный зал, где играли в карты, Белый, отделанный мрамором, где проводились балы, Розовый, который предназначался для концертов. Нет уже ни стеклянного пола, под которым плавали яркие рыбки, ни 132 комнат.
 Что сохранилось, так это заливной луг и дом-музей Костюшко в пешей доступности.',
                'city_id' =>1
            ]
        );
        Showplace::create(
            [
                'name'=>' Дворцовый комплекс Сапег',
                'desc' => 'В путеводителях руины дворца гордо называют «беларусским Версалем», но приезжать сюда стоит не за шикарными видами и интерьерами (сохранилось здесь не так уж и много), а скорее за мощной энергетикой, которая присуща таким местам силы. Только представь: в начале XVII века здесь заложили замок – в этом деле принимал участие канцлер ВКЛ Лев Сапега. Чтобы жить в нем было не только комфортно, но и безопасно, комплексу добавили три мощные оборонительные башни. В Ружанах обсуждались важные государственные вопросы, приходили приемы топ-менеджеров ВКЛ, здесь же размещался архив Сапегов и государственная казна. После разгрома восстания Сапеги покинули резиденцию, и во дворце организовали ткацкую фабрику. В годы Первой мировой ансамбль горел, потом его пытались восстановить, но после Второй мировой войны это дело забросили.',
                'city_id' =>2
            ]
        );
        Showplace::create(
            [
                'name'=>'Брестская крепость',
                'desc' => 'Мощное оборонительное сооружение и масштабный музей советской героической монументалистики под открытым небом. Сама крепость была построена в XIX веке, и история у нее впечатляющая. В 1596 году здесь объявили церковную унию, а во время Первой мировой подписали декрет о мире. Но известной крепость стала после героических событий Второй мировой.

Соблюдай хронологию: на Волынском укреплении загляни в музей «Берестье» – археологические раскопки, где можно рассмотреть остатки городища и деревянных построек XI-XIII веков, уличные мостовые, даже несколько предметов обихода. Дальше двигай в музей защитников Брестской крепости. Территория музея просто огромная – чтобы обойти все и не сбить дыхание, понадобится часа три. Больше всего пробирает в V форте – полузаброшенном укреплении с бронированными дверьми, узкими бойницами, подземными коридорами и полной тишиной. Скорее всего, ты будешь здесь единственным туристом.',
                'city_id' =>3
            ]
        );
        Showplace::create(
            [
                'name'=>' Иезуитский коллегиум ',
                'desc' => 'Пинск – второй в Беларуси по числу сохранившихся достопримечательностей (на первом месте – Гродно). Внимания особенно заслуживает здание коллегиума, построенного в XVII веке как суперпрестижное учебное заведение. Брали туда талантливых студентов независимо от их достатка. Если обходить здание, вид будет разный: с реки это непреступная крепость, со двора – открытая книга. Сейчас в коллегиуме симпатичный музей беларусского Полесья, где можно посмотреть на невонючих чучел или присесть на деревянный велосипед. Дальше по Ленина – монастырь францисканцев с «Пинской мадонной» и крутыми магнитиками, дворец Бутримовичей (в нем сейчас ЗАГС), дом Орды и кампус Полесского университета. Набережная в Пинске длиной в 2,5 км – гулять с красивым видом можно долго.',
                'city_id' =>4
            ]
        );
        Showplace::create(
            [
                'name'=>' Беловежская пуща ',
                'desc' => 'Беларусский повод для гордости – самый большой и старый лесной массив Европы, охраняется ЮНЕСКО. Да, здесь в дикой природе водятся зубры. Да, на них можно даже охотится (если хватит совести). Да, это здесь подписали соглашение о развале СССР. Да, именно здесь живет беларусский Дед Мороз (его резиденция работает даже летом – но костюмчик у деда облегченный). Дыши реликтовым воздухом, рассекай на велосипеде, корми зубра в вольере хлебушком с руки, сгоняй посмотреть на Каменецкую вежу, которой уже более 700 лет.',
                'city_id' =>5
            ]
        );
        Showplace::create(
            [
                'name'=>'Ольманские болота ',
                'desc' => 'Эти болота занимают 75% площади Столинского района – единственный сохранившийся у нас в естественном состоянии комплекс верховых, переходных и низинных болот. Экологи не могут нарадоваться: здесь обитает 687 видов растений, 151 вид птиц (25 из Красной книги) и 26 видов млекопитающих. Интересно, что в 60-ых годах прошлого века в Ольманах находился авиационный полигон, поэтому в болотах до сих пор есть неразорвавшиеся снаряды и бомбы.

Особый интерес представляет экотропа длиной почти в полтора километра. Она идет вдоль озера Большое Засоминое, на другом берегу которого уже Украина. Второй маршрут приведет тебя к 40-метровой вышке, с которой очень удобно осматривать окрестности и биоразнообразие. Спроси у местных, где здесь «море Геродота» – Большое и Малое Засоминое и еще 23 озера.

Обрати внимание, если ты иностранец, за посещение болот придется заранее заплатить 10 базовых (€ 114). Больше информации про экскурсии – здесь.',
                'city_id' =>6
            ]
        );
    }
}
