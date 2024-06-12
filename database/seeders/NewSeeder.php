<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => 'День открытых дверей',
                'readmore' => '12 апреля 2024 года на базе нашего колледжа прошло профориентационное мероприятие,
                проведенное преподавателями колледжа совместно со специалистами',
                'content' => '12 апреля 2024 года на базе нашего колледжа прошло профориентационное мероприятие,
                проведенное преподавателями колледжа совместно со специалистами ТО СЗН по Зубово-
                Полянскому району “ДЕНЬ ОТКРЫТЫХ ДВЕРЕЙ КОЛЛЕДЖА”. Гостями учебного заведения стали
                обучающиеся МБОУ «Ширингушская СОШ», МБОУ «Ново – Выселская СОШ» и МБОУ «Сосновская
                СОШ» .
                Заместитель начальника отдела по оказанию услуг в сфере занятости населения Н.Д. Сурдина
                и ведущий инспектор ТО СЗН по Зубово — Полянскому району В.А. Нуштаева ознакомили
                школьников с формулой и динамикой выбора профессии, методами определения своих
                склонностей и способностей, рассказали какие факторы влияют на выбор профессии, провели
                тестирование с помощью опросника “Ориентир”. В ходе проведения встречи ребята получили
                информацию об услугах, которые оказывает служба содействия занятости населения. Были также
                освещены возможности единой цифровой платформы «Работа России», где, в частности, можно
                пройти профориентационное тестирование, разместить резюме и изучать достоинства той или
                иной профессии по вакансиям работодателей. Ответственный секретарь приемной комиссии
                колледжа Г.В.Марюшкина познакомила ребят с правилами приема в колледж, рассказала о
                специальностях, на которые учебное заведение ведет прием.
                Во второй части мероприятия для ребят была организована интересная экскурсия по
                современным мастерским.',
                'date' => '2024.04.12 14:00',
            ],
            [
                'title' => 'День СПО-2023',
                'readmore' => 'Уважаемые педагоги, дорогие студенты! Сердечно поздравляем вас с нашим профессиональным праздником – Днем среднего профессионального образования в России',
                'content' => 'Уважаемые педагоги, дорогие студенты! Сердечно поздравляем вас с нашим профессиональным праздником – Днем среднего профессионального образования в России, который отмечается 2 октября! Сегодня система СПО наполнена большим количеством нововведений и трансформаций, но неизменным остается качественная подготовка будущих профессионалов самых разных областей экономики образования нашего государства.

                Наш колледж на протяжении многих лет выпускает востребованных и конкурентоспособных специалистов педагогических и технических профессий, которые из года в год демонстрируют свои высокие достижения при реализации инновационных проектов и являются победителями большого количества конкурсов профессионального мастерства.
                
                Коллектив наших преподавателей систематически подтверждает свой профессионализм и уверенно сочетает в своей деятельности современные педагогические тенденции и лучшие традиции российского образования.
                
                Желаю всему нашему коллективу уверенного достижения самых амбициозных целей, стремления к развитию и неугасающего профессионального оптимизма. Будьте счастливы, здоровы и уверены в своих силах! Пусть ваши родные и близкие всегда будут рядом с вами и поддерживают вас!
                
                С праздником!',
                'date' => '2023.11.21 12:00',
            ],
            [
                'title' => 'Профессионалы — 2023',
                'readmore' => 'В период с 4 по 7 апреля 2023 года состоится региональный этап Всероссийского чемпионатного движения по профессиональному мастерству. Он проводится в субъектах',
                'content' => 'В период с 4 по 7 апреля 2023 года состоится региональный этап Всероссийского чемпионатного движения по профессиональному мастерству. Он проводится в субъектах Российской Федерации, предполагает соревнование по перечню компетенций, востребованных в конкретном субъекте Российской Федерации.

                Конкурсантами являются две категории обучающихся. В основной участвуют студенты СПО. Среди юниоров будут соревноваться школьники, достигшие возраста 14 лет.
                ГБПОУ РМ «Зубово-Полянский педагогический колледж» организует три конкурсные площадки: основную и площадку для юниоров по компетенции «Преподавание в младших классах», а также площадку по компетенции «Физическая культура».
                Участие в соревнованиях даёт возможность проверить свои силы, заявить о своём потенциале и проявить свои творческие способности. Подготовка к чемпионату требует грамотного подхода, знания многих тонкостей, это, по сути, целый комплекс знаний, который получает конкурсант. И в результате мы получаем  конкурентоспособного специалиста, который умеет быстро адаптироваться к изменяющимся условиям труда, обладает набором необходимых профессиональных компетенций  в разных областях профессиональной деятельности.
                В период проведения чемпионата все желающие могут посетить рабочие площадки.',
                'date' => '2023.11.22 12:00',
            ],
            [
                'title' => 'Педагог по призванию — Кривоногова Людмила Павловна!',
                'readmore' => 'В самом начале весны свой день рождения отмечает замечательный человек, красивая и интеллигентная женщина, педагог по призванию — Кривоногова Людмила',
                'content' => 'В самом начале весны свой день рождения отмечает замечательный человек, красивая и интеллигентная женщина, педагог по призванию — Кривоногова Людмила Павловна.

                Родилась Людмила Павловна в Торбеевском районе, но именно Зубова Поляна стала её настоящей родиной: сначала она училась в Зубово-Полянском педучилище, а потом, после окончания исторического факультета МГУ им. Н.П.Огарёва, более 30 лет преподавала общественные дисциплины в родном учебном заведении. Уже в студенческие годы проявился её сильный характер, способность к самоорганизации, энергичность и ответственность, которые позволяли ей не только отлично учиться, но и вести активную общественную работу. Все, кто учился в одно время с Людмилой Павловной, помнят её принципиальным членом комитета комсомола училища, талантливой участницей художественной самодеятельности, а также её необычную для студенческого возраста строгую ответственность за любое дело. Она никогда не любила что-то делать кое-как, органически не переносила «халтуру». Наверное, именно поэтому в 1986 году, когда в училище встал вопрос о кандидатуре на должность заведующего школьным отделением, руководство вспомнило именно об этой своей выпускнице.
                
                В это время Людмила Павловна уже работала в одной из школ Торбеевского района, но воспоминания об «альма матер» не оставили места для колебаний – Людмила Павловна согласилась поменять место работы. Её личные качества и знания, полученные в университете, сделали молодого преподавателя профессионалом высокого класса. Она сразу зарекомендовала себя как преподаватель, осваивающий новые педагогические технологии, одной из первых стала применять на уроках информационно-коммуникационные технологии, в результате чего её уроки приобрели высокий уровень научности и современности, а студенты учились логически мыслить, анализировать и делать соответствующие выводы.
                
                Зная Людмилу Павловну, никто из её коллег не удивлялся эффективности её преподавательской деятельности. Но она и став заведующей отделением, где требуются управленческие навыки, нисколько не растерялась. Контроль за посещаемостью и успеваемостью студентов, организацию помощи в учебе тем, кто в ней нуждался, Людмила Павловна довела до совершенства',
                'date' => '2024.05.21 14:30',
            ],
        ]);
    }
}