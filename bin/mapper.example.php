<?php

return [
    'static' => [
        // Envelope Header
        // Envelope Control Number
        'EH-050'  => '0',
        // Transaction Header
        // Transaction ID (Static EDI Value)
        'TH-020'  => 'T100099-002',
        // Transaction Header Control Number
        'TH-030'  => '1',
        // Transaction Processing Info
        // Version
        'TPI-020' => ' 1.00',
        // Identifier Code Type
        'TPI-030' => '01',
        // Always going to be new submit
        'TPI-050' => 'N',
        // File Identification
        // File Version
        '000-030' => '3.20',
        // Working Copy
        '000-040' => 'W',
        // Record ID: Top of form
        //Additional Loan Asset Considerations
        '00A-020' => 'N',
        '00A-030' => 'N',
        //Fixed Rate
        '01A-090' => '05',
        'TT-020'  => '1',
        'ET-020'  => '0',
        // Number of units being financed (Always One)
        '02A-070' => '1',
        // Type of legal description always F1 => Other
        '02A-080' => 'F1',
        // Default to primary residence
        '02B-050' => '1',
        // Application always taken over telephone
        '10B-020' => 'T',
        '10B-050' => '8004518810',
        '10B-060' => 'Interest Smart Home Loans',
        '10B-070' => '23172 PLAZA POINTE DR',
        '10B-090' => 'SUITE 185',
        '10B-100' => 'CA',
        '10B-110' => '92653',
        // Appraisal cost
        '99B-040' => '0',
        'PID-010' => 'PID',
        'PCH-020' => '360'
    ],

    // This is our model/db relation to the FNM format piped with a default value if not blank
    // If it is prefixed with 'computed|' then it will run the method we pipe to
    'mapped' => [
    ],

    // Fields whose value/requirement is dependent on another field
    // In form of parent => child

    'conditional' => [
    ],
];
