
@extends('frontend.layout.front_layout')

@push('css')
        <style>
   
        .table-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.2);
            max-width: 900px;
            width: 100%;
            overflow: hidden;
            margin: 0 auto;
        }
        .table-container h5 {
    text-align: center;
    margin-bottom: 15px;
    color: #8507a9;
    font-size: 30px;
}
span.sl_no{
    margin-bottom: 15px;
    color: #8507a9; 
    font-weight: bold;
    font-size: 50px !important;
}
.table-container h1 {
    padding: 0;
    margin: 0;
}

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #2d3748;
            font-size: 2.2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .modern-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

            .modern-table thead {
                background: linear-gradient(135deg, #c3ae3e 0%, #4aa570 100%);
            }

        .modern-table th {
            padding: 20px 24px;
            text-align: left;
            font-weight: 600;
            font-size: 0.95rem;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            position: relative;
        }

        .modern-table th:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 25%;
            height: 50%;
            width: 1px;
            background: rgba(255, 255, 255, 0.2);
        }

        .modern-table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f1f5f9;
        }

        .modern-table tbody tr:hover {
            background: linear-gradient(135deg, rgba(79, 70, 229, 0.05), rgba(124, 58, 237, 0.05));
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.15);
        }

        .modern-table tbody tr:last-child {
            border-bottom: none;
        }

        .modern-table td {
            padding: 18px 24px;
            font-size: 0.95rem;
            color: #475569;
            border: none;
            vertical-align: middle;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background: linear-gradient(135deg, #0fb429, #456512);
            color: white;
        }

        .status-pending {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }

        .status-inactive {
            background: linear-gradient(135deg, #540692, #9926dc);
            color: white;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            margin-right: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-details {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 2px;
        }

        .user-email {
            font-size: 0.85rem;
            color: #64748b;
        }

        .amount {
            font-weight: 700;
            font-size: 1.1rem;
        }

        .amount.positive {
            color: #059669;
        }

        .amount.negative {
            color: #dc2626;
        }

        .date {
            color: #64748b;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .table-container {
                padding: 20px;
                margin: 10px;
            }

            .modern-table th,
            .modern-table td {
                padding: 12px 16px;
                font-size: 0.9rem;
            }

            .avatar {
                width: 35px;
                height: 35px;
                margin-right: 8px;
            }

            h1 {
                font-size: 1.8rem;
                margin-bottom: 20px;
            }
        }

        /* Subtle animation on load */
        .modern-table tbody tr {
            opacity: 0;
            animation: fadeInUp 0.5s ease forwards;
        }

        .modern-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
        .modern-table tbody tr:nth-child(2) { animation-delay: 0.2s; }
        .modern-table tbody tr:nth-child(3) { animation-delay: 0.3s; }
        .modern-table tbody tr:nth-child(4) { animation-delay: 0.4s; }
        .modern-table tbody tr:nth-child(5) { animation-delay: 0.5s; }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
                .sl_info {
                    display: flex;
                    justify-content: center;
                }
    </style>
@endpush

@section('content')
<div style="margin-top: 50px;margin-bottom: 150px">
        <div class="table-container">
        <h1>Thank You - <span class="samir_bangla" style="font-size: 40px">{{ $data->name }}</span></h1>
            <div class="sl_info">
                <h5 class="samir_bangla">আপনার সিরিয়াল নং - #</h5>
                <span class="sl_no">{{ $data->sl_no }}</span>
            </div>
        <table class="modern-table">
            <thead>
                <tr>
                    <th>Patient Info</th>
                    <th>Patient ID</th>
                    <th>Serial No</th>
                    <th>SL. Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="user-info">
                            {{-- <div class="avatar">PN</div> --}}
                            <div class="user-details samir_bangla">
                                <div class="user-name">{{ $data->name }}</div>
                                <div class="user-email">{{ $data->address }}</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="status-badge status-active">{{ $data->paditent_id }}</span></td>
                    <td><span class="status-badge status-inactive">K.R.C.T # {{ $data->sl_no }}</span></td>
                    <td><span class="date">{{ date('M d D Y', strtotime($data->created_at));}}</span></td>
                    <td>
                        <button style="background: linear-gradient(135deg, #4f46e5, #7c3aed); color: white; border: none; padding: 8px 16px; border-radius: 8px; font-size: 0.85rem; font-weight: 500;">Active</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection