# Livewire
- ao instalar, não precisa mais dos styles nem scripts

## Validações
- Possivel criar um formulário livewire agora também, passando os atributos para uam classe separada
```php
#[Rule(['required', 'min:3'])]
public ?string $name;

#[Rule(['required', 'email', 'min:3'])]
public ?string $email;

public ?string $github;
```
## Eventos
```php
public function save()
{
    $this->validate();
    $this->form->save();
    $this->dispatch('candidate::created');
}
#[On('candidate::created')]
public function run()
{
    $this->winner = Candidate::query()->inRandomOrder()->first()?->name;
}
```
# Computed properties
- Antes
```php
public function getCandidatesProperty()
{
    return Candidate::all();
}
```
- agora
```php
use Livewire\Attributes\Computed;

#[Computed()]
public function candidates()
{
    return Candidate::all();
}
```
## Query string
```php
#[Url(as: 'q', history: true, keep: true)]
public ?string $search = '';
```