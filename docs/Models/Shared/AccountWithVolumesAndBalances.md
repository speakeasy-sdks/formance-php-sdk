# AccountWithVolumesAndBalances


## Fields

| Field                                     | Type                                      | Required                                  | Description                               | Example                                   |
| ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- | ----------------------------------------- |
| `address`                                 | *string*                                  | :heavy_check_mark:                        | N/A                                       | users:001                                 |
| `balances`                                | array<string, *int*>                      | :heavy_check_mark:                        | N/A                                       | {<br/>"COIN": 100<br/>}                   |
| `metadata`                                | array<string, *string*>                   | :heavy_check_mark:                        | N/A                                       | {<br/>"admin": "true"<br/>}               |
| `type`                                    | *?string*                                 | :heavy_minus_sign:                        | N/A                                       | virtual                                   |
| `volumes`                                 | array<string, array<string, *int*>>       | :heavy_check_mark:                        | N/A                                       | {<br/>"COIN": {<br/>"input": 100,<br/>"output": 0<br/>}<br/>} |