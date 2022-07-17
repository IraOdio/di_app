# Code styles

Большая буква `I` в начале названия файла означает `Interface`, пример - `IWorld`
Большая буква `A` в начале названия файла означает `abstract class`, пример - `AWorld`


# Игровые объекты и их иерархия

- GameObject
- -- World
- -- Organism


# Принятые архитектурные решения, и игровыео объекты, вопросы - которыми я задавался в процессе разработки.

**Вопрос: Почему у Инкубатора есть и абстрактный класс 'AIncubator' и конкретный 'Incubator', а у Организма только абстрактный 'AOrganism'?**

Ответ: Создавая абстрактный класс организма, я следом сделал  же и обычный "конкретный" так сказать класс, и задумался - а нахрена он?
Есть условный один вид организмов, другой вид - каждый вид  имеет свое уникальное именование и вот их "конкретынй" класс будет унаследован от абстрактного организма, 
и поведение их будет описано интерфейсом организма, а вот нужна ли сущность с именем "Организм"? Если да, то что это будет? Вид организмов имееющее имя "Организм"?
Когда будет создаваться экземпляр какого-либо организма, будет выбираться непосредственно конкретная реализация определенного вида и этот определенный вид будет унаследован
от абстрактного класса "Организма", почему же у Инкубатора же остался конкретный класс?
Для начала стоит ответить, что такое Инкубатор? - Для меня это неведомая хрень, симулирующая условия в которых будет "выращиваться" что-то
и эта хрень может называться как угодно, может называться "СтимуляторРоста", а может "Инкубатор" - но что между ними общего будет?
Они будут иметь поведение Инкубатора, т.е. реализовывать интерфейс Инкубатора - т.е. как бы выглядела иерархия классов

- `IIncubator -> AIncubator`
- -- `AIncubator -> Incubator` 
- -- `AIncubator -> SimulatorRosta`

Кстати, вот что с иерархией организмов

Как было бы, если бы был "конкретный" класс организма

- `IOrganism -> AOrganism -> Organism -> Alpha`
- `IOrganism -> AOrganism -> Organism -> Beta`

Как стало выглядеть

- `IOrganism -> AOrganism -> Alpha`
- `IOrganism -> AOrganism -> Beta`

И Альфа и Бета являются полноценными видами организмов и имеют поведенеие организма, вообщем смысла в существовании конкретного класса Организма я не увидел. 

**Вопрос: вопрос**

Ответ: ответ