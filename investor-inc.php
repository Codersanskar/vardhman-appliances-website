<style>
    .ir-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }
    @media (max-width: 991px) {
        .ir-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 575px) {
        .ir-grid { grid-template-columns: 1fr; }
    }
    .ir-tile {
        display: block;
        background: #fff;
        border: 1px solid #e7e7e7;
        border-radius: 10px;
        padding: 32px 28px;
        text-decoration: none;
        transition: box-shadow .25s ease, transform .25s ease, border-color .25s ease;
        height: 100%;
    }
    .ir-tile:hover {
        box-shadow: 0 12px 28px rgba(0,0,0,.08);
        transform: translateY(-3px);
        border-color: #d9d9d9;
    }
    .ir-tile .ir-icon {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(var(--bs-primary-rgb, 13,110,253), .08);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
    }
    .ir-tile .ir-icon i {
        font-size: 24px;
        color: var(--bs-primary, #0d6efd);
    }
    .ir-tile h5 {
        font-weight: 700;
        margin-bottom: 8px;
        color: #1c1c1c;
    }
    .ir-tile p {
        font-size: .92rem;
        color: #6b6b6b;
        margin-bottom: 0;
    }
    .ir-breadcrumb {
        font-size: .82rem;
        letter-spacing: .04em;
        text-transform: uppercase;
        color: #8a8a8a;
        margin-bottom: 14px;
    }
    .ir-breadcrumb a { color: #8a8a8a; text-decoration: none; }
    .ir-breadcrumb a:hover { color: var(--bs-primary, #0d6efd); }
    .ir-doc-list {
        list-style: none;
        margin: 0;
        padding: 0;
        border: 1px solid #e7e7e7;
        border-radius: 10px;
        overflow: hidden;
    }
    .ir-doc-list li {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 16px 22px;
        border-bottom: 1px solid #eee;
        font-size: .95rem;
    }
    .ir-doc-list li:last-child { border-bottom: none; }
    .ir-doc-list .ir-doc-name { display: flex; align-items: center; gap: 12px; color: #2b2b2b; }
    .ir-doc-list .ir-doc-name i { color: var(--bs-primary, #0d6efd); font-size: 1.1rem; }
    .ir-doc-list .ir-doc-meta { color: #9a9a9a; font-size: .82rem; white-space: nowrap; }
    .ir-empty {
        text-align: center;
        padding: 48px 24px;
        border: 1px dashed #d9d9d9;
        border-radius: 10px;
        color: #8a8a8a;
    }
    .ir-empty i { font-size: 2rem; display: block; margin-bottom: 10px; color: #c7c7c7; }
    .ir-note {
        background: #f6f7f9;
        border-left: 3px solid var(--bs-primary, #0d6efd);
        padding: 14px 20px;
        border-radius: 6px;
        font-size: .9rem;
        color: #5a5a5a;
        margin-top: 28px;
    }
</style>
