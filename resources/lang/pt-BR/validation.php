<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute deve ser uma URL válida.',
    'after' => 'O campo :attribute deve ser uma data superior a :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data superior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num' => 'O campo :attribute só pode conter letras e números.',
    'array' => 'O campo :attribute deve ser uma matriz.',
    'before' => 'O campo :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O campo :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file' => 'O campo :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo :attribute não confere.',
    'date' => 'O campo :attribute não é uma data válida.',
    'date_equals' => 'O campo :attribute deve ser igual a data :date.',
    'date_format' => 'O campo :attribute não corresponde ao formato :format.',
    'different' => 'Os campos :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve ter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O campo :attribute tem dimensões inválidas para uma imagem',
    'distinct' => 'O campo :attribute tem valores duplicados.',
    'email' => 'O campo :attribute deve ser um endereço de e-mail válido.',
    'exists' => 'O valor do campo :attribute é inválido.',
    'file' => 'O campo :attribute deve ser um arquivo.',
    'filled' => 'O campo :attribute deve ter um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O arquivo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O campo :attribute deve ter mais que :value caracteres.',
        'array' => 'O vetor :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual a :value.',
        'file' => 'O arquivo :attribute deve ser maior ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser igual ou ter mais que :value caracteres.',
        'array' => 'O vetor :attribute deve ter :value items ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O valor do campo :attribute é inválido.',
    'in_array' => 'O valor do campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'ip' => 'O campo :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json' => 'O campo :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O arquivo :attribute deve ter menos que :value kilobytes.',
        'string' => 'O campo :attribute deve ter menos que :value caracteres.',
        'array' => 'O vetor :attribute deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute tem que ser menor ou igual a :value.',
        'file' => 'O arquivo :attribute tem que ser menor ou igual a :value kilobytes.',
        'string' => 'O campo :attribute deve ser igual ou ter menos que :value caracteres.',
        'array' => 'O vetor :attribute não pode ter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file' => 'O arquivo :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O campo :attribute não pode ter mais que :max characters.',
        'array' => 'O vetor :attribute não pode ter mais que :max itens.',
    ],
    'mimes' => 'O arquivo :attribute deve ser do tipo :values.',
    'mimetypes' => 'O arquivo :attribute deve ser do tipo :values.',
    'min' => [
        'numeric' => 'O campo :attribute não pode ter menos que :min.',
        'file' => 'O arquivo :attribute não pode ter menos que :min kilobytes.',
        'string' => 'O campo :attribute deve ter ao menos :min caracteres.',
        'array' => 'O vetor :attribute deve ter ao menos :min itens.',
    ],
    'not_in' => 'O valor do campo :attribute é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'present' => 'O campo :attribute deve ser preenchido',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é necessário.',
    'required_if' => 'O campo:attribute é necessário quando :other é :value.',
    'required_unless' => 'O campo :attribute é necessário a não ser que :other seja :values.',
    'required_with' => 'O campo :attribute é necessário quando :values é preenchido',
    'required_with_all' => 'O campo :attribute é necessário quando todos os campos :values são preenchidos',
    'required_without' => 'O campo :attribute é necessário quando :values não é preenchido.',
    'required_without_all' => 'O campo :attribute é necessário quando nenhum dos campos :values são preenchidos',
    'same' => 'O campo :attribute e o campo :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve ter o tamanho de :size.',
        'file' => 'O arquivo :attribute deve ter o tamanho :size kilobytes.',
        'string' => 'O campo :attribute deve ter o tamanho de :size caracteres.',
        'array' => 'O vetor :attribute deve conter :size itens.',
    ],
    'string' => 'O campo :attribute deve ser uma sequencia de caracteres.',
    'timezone' => 'O campo :attribute deve ser um fuso horário válido.',
    'unique' => 'O valor do campo :attribute já está em uso.',
    'uploaded' => 'O arquivo :attribute falhou no upload.',
    'url' => 'O formato da URL :attribute é inválida.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'password' => 'senha',
        'name' => 'nome',
    ],

];
